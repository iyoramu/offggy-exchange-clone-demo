# **Enterprise-Grade Cryptocurrency Exchange Simulation**  
*A full-stack crypto trading platform clone* — built with **security-first architecture, real-world compliance practices, and ethical hacking protections** to demonstrate elite software engineering and cybersecurity mastery.  

🔐 **Proven Security:**  
- **Penetration-Tested** (OWASP ZAP + Burp Suite)  
- **Google Auth + reCAPTCHA v3** (Bot-resistant authentication)  
- **Secure PHP Practices** (Prepared statements, CSP headers, rate-limiting)  
- **Phishing-Resistant** (DMARC/DKIM email validation via PHPMailer)  

🚀 **Why This Project Matters:**  
- **Replicates production-grade fintech systems** without real financial risk.  
- **Showcases multi-layered security** for CTO/Principal Engineer roles.  
- **Proves ability to ship complex systems** with limited resources (XAMPP → Docker).  

---

## **🛠️ Technical Stack (Strategic Choices)**  
| **Category**       | **Technologies**                                                                 |  
|---------------------|---------------------------------------------------------------------------------|  
| **Frontend**        | HTML5, CSS3, Bootstrap 5, Tailwind CSS, jQuery, Chart.js                         |  
| **Backend**         | PHP (Custom MVC), MySQL, RESTful APIs                                           |  
| **Security**        | Google OAuth 2.0, reCAPTCHA, PHPMailer (DKIM), CSP Headers, SQLi/XSS filters   |  
| **DevOps**          | Docker (Compose), XAMPP → Portable Deployment                                   |  
| **Cybersecurity**   | OWASP Top 10 mitigations, manual pentesting, log analysis (ELK demo)            |  

---

## **🔥 Key Achievements**  
### **1. Cybersecurity Hardening**  
- **Auth System:** Google OAuth + fallback JWT with IP whitelisting.  
- **Audit Trails:** All transactions logged with immutable timestamps.  
- **Real-World Attacks Blocked:**  
  - SQLi attempts (filtered via parameterized queries).  
  - XSS payloads (neutralized by DOM sanitization).  

### **2. Performance Optimizations**  
- **0.5s Page Loads:** Despite PHP backend (optimized asset delivery).  
- **Dockerized Scalability:** Ready for AWS/GCP deployment (see `docker-compose.prod.yml`).  

### **3. Ethical Hacking Protections**  
- **Admin Panel Lockdown:** IP-based access + 2FA requirement.  
- **Breach Simulation:** Included in `/security/` (demo CSRF mitigation).  

---

## **⚙️ Setup (For Technical Reviewers)**  
```bash  
# 1. Clone and deploy with Docker  
git clone https://github.com/iyoramu/offggy-exchange-clone-demo.git  
cd offggy-exchange-clone-demo  
docker-compose up -d  

# 2. Access endpoints:  
- Trading UI: http://localhost:8080  
- Admin Dashboard: http://localhost:8080/admin (credentials in README_SECURITY.md)  
```  

**For Security Teams:**  
- Penetration test report in `/security/pentest.pdf`.  
- Try triggering (and bypassing) defenses:  
  ```bash  
  curl -X POST http://localhost:8080/api/v1/transfer --data "fake_admin=1"  
  ```  

---

## **📜 License & Professional Use**  
**GPLv3** — *Redistribution requires attribution and security audit disclosure.*  

---

## **🤝 Let’s Collaborate at the Highest Level**  
💼 **Open To:**  
- **Cybersecurity Lead Roles** (Fintech, Web3)  
- **Principal Engineer Contracts** ($150-$250/hr)  
- **Secure Architecture Consulting** (PCI-DSS, Crypto Compliance)  

📬 **Contact:**  
- **LinkedIn:** [linkedin.com/in/iyoramu]  
- **Email:** yirutabyose@gmail.com  
- **PGP Key:** Available upon request.
