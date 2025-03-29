
$(document).ready(function () {
            
    // Array containing usernames
    const usersArray = [
        "Liam Smith", "Olivia Johnson", "Noah Williams", "Emma Davis", "Sophia Wilson",
        "Jackson Lee", "Oliver Martinez", "Ava Kim", "Lucas Wang", "Aria Singh",
        "Muhammad Chen", "Mia Kim", "Ethan Brown", "Isabella Liu", "Amelia Patel",
        "Caden Kim", "Abigail Gupta", "Harper Smith", "Elijah Huang", "Evelyn Kim",
        "Mason Wang", "Ella Patel", "Layla Kim", "Grayson Kim", "Avery Chen",
        "Nehemiah Patel", "Scarlett Li", "Benjamin Kumar", "Chloe Gupta", "Logan Lee",
        "Carter Kim", "Grace Gupta", "Sebastian Lee", "Aubrey Wang", "Zoey Kim",
        "Ryan Gupta", "Addison Chen", "Nolan Li", "Eli Kim", "Hunter Wang",
        "Lily Kim", "Olivia Wang", "Ezra Kim", "Levi Gupta", "Liam Chen",
        "Mila Kim", "Asher Wang", "Zoe Kim", "Lincoln Patel", "Eva Kim",
        "Jack Kim", "Hazel Wang", "Naomi Gupta", "Nathan Kim", "Madison Chen",
        // Add more names here if needed
    ];

    // Function to get a random username
    function getRandomUserName() {
        const randomIndex = Math.floor(Math.random() * usersArray.length);
        return usersArray[randomIndex];
    }

    // Function to simulate fetching random user data
    function getRandomUserData(callback) {
        const userData = [{
            username: getRandomUserName()
        }];
        callback(userData);
    }

    // Function to get a random bank name
    function getRandomBank() {
        const banks = ["HUNTINGON", "WOODFOREST", "WELLSFARGO", "PAYPAL", "M&T", "DCU"];
        const randomIndex = Math.floor(Math.random() * banks.length);
        return banks[randomIndex];
    }

    // Function to show notification with random user and bank data
    function showNotification() {
        getRandomUserData(function (userData) {
            if (userData && userData.length > 0) {
                const username = userData[0].username;
                const bank = getRandomBank(); // Get a random bank
                toastr.success(`User ${username} just purchased logs in ${bank}`, null, {
                    timeOut: 5000,
                    extendedTimeOut: 1000,
                    onclick: function () {
                        console.log("Toast clicked");
                    }
                });
            } else {
                console.error('Invalid or missing data from the server');
            }
        });
    }

    // Initial notification after 2 seconds and recurring notifications every 15 seconds
    setTimeout(showNotification, 2000);
    setInterval(showNotification, 15000);

});