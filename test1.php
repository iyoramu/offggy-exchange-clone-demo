<!DOCTYPE html>
<!-- saved from url=(0044)https://offggy.com/review.php?username=petit -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{% static &#39;" data-template="vertical-menu-template-free"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>
        reviews
    </title>

    <meta name="description" content="">

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="https://www.inlaks.com/wp-content/uploads/2019/08/Inlaks-Favicon.png" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./reviews_files/css2" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./reviews_files/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="./reviews_files/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="./reviews_files/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="./reviews_files/dr.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./reviews_files/perfect-scrollbar.css">

    <link rel="stylesheet" href="./reviews_files/apex-charts.css">

    <!-- Page CSS -->
    <style>
       
       .reviews-container {
    width: 100%;
    margin: 0px auto;
    background-color:  #000101;
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    padding: 40px; /* Reduce padding for better small screen layout */
}

/* Make the heading responsive */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 2rem; /* Reduce font size for smaller screens */
}

/* Review card styling */
.review-card {
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-bottom: 30px;
    background-color: #0D0B2E;
    border-radius: 10px;
    padding: 70px;
    transition: transform 0.2s ease;
}

.review-card:hover {
    transform: scale(1.02);
}

.review-image {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-right: 20px;
}

.review-content {
    flex-grow: 1;
}

.review-author {
    font-weight: bold;
    font-size: 1.2rem;
    margin-bottom: 8px;
    color: #333;
}

.review-text {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #fff;
}

.review-photo img {
    margin-top: 15px;
    max-width: 50%;
    border-radius: 8px;
}

/* Review form styling */
.review-form {
    position: relative; /* Better for responsiveness than absolute */
    margin-top: 40px;
    padding: 20px;
    background-color: #0D0B2E;
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align the content inside the form */
    left: 21%; /* Responsive positioning */
    right: 0; /* Responsive positioning */
}
.review-form h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: black;
        }
/* Media Queries for responsiveness */
@media (max-width: 768px) {
    h1 {
        font-size: 1.8rem; /* Smaller font for small screens */
    }
    
    .review-card {
        flex-direction: column; /* Stack the review card for smaller screens */
        padding: 10px;
    }

    .review-form {
        margin: 20px auto; /* Center the form on small screens */
        padding: 10px; /* Adjust padding for smaller screens */
        max-width: 90%; /* Ensure the form fits within the screen */
    }

    .review-image {
        width: 60px; /* Reduce the image size */
        height: 60px;
        margin-right: 10px;
    }

    .form-group input,
    .form-group textarea {
        font-size: 0.9rem; /* Adjust font size for smaller screens */
        width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;

            
            
    }

    .form-group button {
        font-size: 0.9rem; /* Adjust button size for smaller screens */
        padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            
            cursor: pointer;
    }
    .form-group textarea {
            height: 100px;
        }
}
.star-rating {
    display: flex;
    direction: row-reverse;
    justify-content: flex-start;
}

.star-rating input {
    display: none;
}

.star-rating label {
    font-size: 3rem;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s ease-in-out;
}

.star-rating input:checked ~ label,
.star-rating label:hover,
.star-rating label:hover ~ label {
    color: #ffcc00;
}

/* Media Queries for very small screens */
@media (max-width: 480px) {
    h1 {
        font-size: 1.5rem;
    }
    
    .review-card {
        padding: 5px;
    }

    .review-image {
        width: 50px;
        height: 50px;
    }

    .review-form {
        padding: 10px;
        max-width: 100%; /* Take full width on very small screens */
    }
}
    </style>

    <!-- Helpers -->
    <script src="./reviews_files/helpers.js.download"></script><style type="text/css">
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-page {
  padding-top: 0px !important;
}
.content-wrapper {
  padding-bottom: 0px !important;
}</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./reviews_files/config.js.download"></script>
    <link rel="stylesheet" type="text/css" href="./reviews_files/jquery.dataTables.css">

     
<style type="text/css">
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-page {
  padding-top: 0px !important;
}
.content-wrapper {
  padding-bottom: 0px !important;
}</style><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group, 
.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style></head>

<body>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

           <!-- Menu -->
           




    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <script src="./reviews_files/jquery-3.6.4.min.js.download"></script>
    <link rel="stylesheet" href="./reviews_files/toastr.min.css">

    <script src="./reviews_files/jquery-3.6.4.min.js.download"></script>
    <script src="./reviews_files/toastr.min.js.download"></script>
    <title>
        logs
    </title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="stylesheet" href="./reviews_files/boxicons.css">

    <!-- <link rel="icon" type="image/x-icon" href="https://www.inlaks.com/wp-content/uploads/2019/08/Inlaks-Favicon.png" /> -->

    <style>
    .gallery {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
    }

    .custom-card {
      width: 25%;
      max-height: 100vh;
      margin: 15px;
      box-sizing: border-box;
      float: left;
      background-color: black;
      text-align: center;
      border-radius: 20px;
      padding-top: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
      transition: .4s;
      background: #fff;
    }

    .custom-card:hover {
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      transform: translate(0px, -8px);
    }

    .custom-card p {
      text-align: center;
      color: #b2bec3;
      padding-top: 0 8px;
    }

    .custom-card a {
      position: relative;
      display: inline-block;
      background-color: #000;
      color: #fff;
      padding: 10px 20px;
      border-radius: 40px;
      margin-top: 20px;
      text-decoration: none;
    }

    img{
    width: 180px;
    height: 140px;
    text-align: center;
    margin: 0 auto ;
    border-radius: 20px;
     display: block; 
 }

    @media (max-width: 1024px) {
      .custom-card {
        width: 45%;
        height: auto;
      }
    }

    @media (max-width: 750px) {
      .custom-card {
        width: 100%;
        height: auto;
      }
    }

    @media (min-width: 35em) {
      .row {
        display: flex;
        margin-left: -.75em;
        margin-right: -.75em;
      }

      .column {
        flex: 1;
        margin-right: 0.75em;
        margin-left: 0.75em;
      }
    }



    
        #logsPurchased {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px;
        }


        .notification-toast {
        background-color: #28a745;
        color: #fff;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    
    
    .toast-success {
    background-color: #4F4F4F; /* Change this color to your preference */
    color: #fff;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 15px;
}




  </style>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./reviews_files/helpers.js.download"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./reviews_files/config.js.download"></script>


    <link rel="stylesheet" type="text/css" href="./reviews_files/jquery.dataTables.css">

   





    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        

        <div class="layout-container">
             <!-- Menu -->
             

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme sidenav-bg-color" style="background-color: #07102e !important; color: white !important;" data-bg-class="bg-menu-theme">

    
        <ul class="menu-inner py-1 pt-5 ps">
        
           
<li class="menu-item py-1">
                <a href="https://offggy.com/review.php?username=petit#" class="menu-link">
                    <div data-i18n="Basic">Logged in as petit</div>
                </a>
            </li>


<li class="menu-item py-1">
                        <a href="https://offggy.com/review.php?username=petit#" class="menu-link">
                            <div data-i18n="Basic">Balance:                                  $0                                

                        </div>
                        </a>
                    </li>
            
                   <!-- Dashboard -->
                    <li class="menu-item py-1">
                        <a href="https://offggy.com/Addbalance.php?username=petit" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-credit-card"></i>
        <div data-i18n="Analytics">ADD BALANCE</div>
      </a>
                    </li>


                    <li class="menu-item active">
                        <a href="https://offggy.com/Dashboad.php?username=petit" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-dashboard"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
                    </li>



                    <li class="menu-item py-1">
                    <a href="https://offggy.com/bklogs.php?username=petit" class="menu-link">
        
        <i class="menu-icon tf-icons bx bxs-bank"></i>
        
        <div data-i18n="Basic">BANK LOGS</div>
      </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="https://offggy.com/dw.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Woodforest Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/gw.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Wells Fargo Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/msa.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">USAA Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/tea.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">M&amp;T Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/ieei.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Huntington Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/cud.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">DCU Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/pop.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Citizens Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/acii.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Citi Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/niche.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Chime Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/sim.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Chase Bank</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/leo.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Cash App Logs</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/oab.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">Bank of America (BOA)</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://offggy.com/cufat_bank.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">AFCU Bank</div>
                                </a>
                            </li>
                             <li class="menu-item">
                                <a href="https://offggy.com/avm.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">CAPITAL ONE Bank</div>
                                </a>
                            </li>
                             <li class="menu-item">
                                <a href="https://offggy.com/lpac.php?username=petit" class="menu-link">
                                    <div data-i18n="Error">REGION  Bank</div>
                                </a>
                            </li>
                       

                        </ul>
                    </li>


                    <li class="menu-item py-1">
                    <a href="https://offggy.com/review.php?username=petit" class="menu-link">
        
        <i class="menu-icon tf-icons bx bxs-bank"></i>
        
        <div data-i18n="Basic">Reviews/Rating</div>
      </a>
                        </li>
 

                         

                    
       
        
       
                            
        
        

                    <div class="py-3 menu-item">
                        <li class="menu-item">
                            <a href="https://offggy.com/history2.php?username=petit" class="menu-link">
          <i class="menu-icon tf-icons bx bx-history"></i>
          <div data-i18n="Basic">PURCHASE HISTORY</div>
        </a>
                        </li>
                        <li class="menu-item">
                            <a href="https://offggy.com/defr.php?username=petit" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-dollar-circle"></i>
          <div data-i18n="Basic">REQUEST REFUND</div>
        </a>
                        </li>
                        <li class="menu-item">
                            <a href="https://offggy.com/signOut.php" class="menu-link">
          <i class="menu-icon tf-icons  bx bx-log-out"></i>
          <div data-i18n="Basic">LOGOUT</div>
        </a>
                        </li>
                    </div>

                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
            </aside>
            
   
                <!-- / Navbar -->

            <!-- / Menu -->

            
            

            <!-- build:js assets/vendor/js/core.js --> 







<!-- Include jQuery and Toastr -->



 
<!-- Add this script to your HTML -->
<script>
    $(document).ready(function () {

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
    // ... (add more names)
];
 // Replace with your user names

        function getRandomUserName() {
            const randomIndex = Math.floor(Math.random() * usersArray.length);
            return usersArray[randomIndex];
        }

        function getRandomUserData(callback) {
            // Simulate fetching data from the server
            const userData = [{
                username: getRandomUserName()
            }];
            callback(userData);
        }

        function getRandomBank() {
            const banks = ["HUNTINGON", "WOODFOREST", "WELLSFARGO", "PAYPAL","M&T","DCU"]; // Add your banks here
            const randomIndex = Math.floor(Math.random() * banks.length);
            return banks[randomIndex];
        }

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

        setTimeout(showNotification, 2000);
        setInterval(showNotification, 15000);
    });
</script>



 

  

 


<script src="./reviews_files/oh79biksoicotfer6fzldcijjumag4z0.js.download" async=""></script>


































































            

            
            <div class="layout-page">
                <!-- Navbar -->
 
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" id="layout-navbar" style="background-color: #0d0b2e !important; box-shadow: none !important;">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
                    </div>
                    <div class="d-xl-block text-white text-center w-100">
        <div class="row mx-auto">
            <div class="col-12">
                <div class="h4 display-5 h4-display">
                     reviews
                </div>
            </div>
        </div>
    </div>
</nav>



<div class="reviews-container">
    <h1 style="color: #fff;">Customer Reviews</h1>
    <div id="reviews-list">
                    <div class="review-card">
                <img class="review-image" src="./reviews_files/CS_Elysee_UDUKUNDA_2024.jpg" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Elysee</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 23, 2024, 7:51 am</small>
                    </div>
                    <div class="review-text">Okay then</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                    <!-- Display review photo if it exists -->
                    
                    <!-- Conversation thread between user and admin -->
                    <div class="conversation-thread">
                                                    
                                                                        </div>

                    <!-- Keep showing the reply form for user if admin has replied -->
                    
                    
                </div>
            </div>
                    <div class="review-card">
                <img class="review-image" src="./reviews_files/default-user.png" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Muhire</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 7, 2024, 3:19 am</small>
                    </div>
                    <div class="review-text">People will catch you doing something which is not right.</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                    <!-- Display review photo if it exists -->
                    
                    <!-- Conversation thread between user and admin -->
                    <div class="conversation-thread">
                                                                                    <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Noo. just have to follow the rules.</p>
                                    <small style="font-size: 1rem;">Replied on September 9, 2024, 10:59 pm</small>
                                </div>
                            
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">hhh you saw it.</p>
                                    <small style="font-size: 1rem;">Replied on September 9, 2024, 10:59 pm</small>
                                </div>
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">You will hv to wait:</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 12:01 pm</small>
                                </div>
                            
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">new logs out?</p>
                                    <small style="font-size: 1rem;">Replied on December 15, 2024, 4:25 am</small>
                                </div>
                                                                        </div>

                    <!-- Keep showing the reply form for user if admin has replied -->
                    
                    
                </div>
            </div>
                    <div class="review-card">
                <img class="review-image" src="./reviews_files/CS_Elysee_UDUKUNDA_2024.jpg" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Elysee</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 7, 2024, 3:19 am</small>
                    </div>
                    <div class="review-text">I love your working it is something to look forward to,,, I really appreciate.</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                    <!-- Display review photo if it exists -->
                    
                    <!-- Conversation thread between user and admin -->
                    <div class="conversation-thread">
                                                                                    <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Do you have money?</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:27 pm</small>
                                </div>
                            
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Do you have money?</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:29 pm</small>
                                </div>
                            
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">No! I do not have money.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:29 pm</small>
                                </div>
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">But I will see What I can do.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:52 pm</small>
                                </div>
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Then you to do it quickly before others take your spot.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 3:11 pm</small>
                                </div>
                            
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Okay Got it!</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 3:12 pm</small>
                                </div>
                                                                        </div>

                    <!-- Keep showing the reply form for user if admin has replied -->
                    
                    
                </div>
            </div>
            </div>
</div>

    <div class="review-form">
        <h2 style="color: #fff;">Submit Your Review</h2>
        <form action="https://offggy.com/review.php?username=petit" method="POST" enctype="multipart/form-data">
        <div class="form-group">
    <label for="author" style="color: #fff;">Your   username (e.g., petit)</label>

    <input type="text" id="author" name="author" placeholder="Enter your username" style=" font-size: 0.9rem;  
        width: 100%;
        padding: 10px;
        color: #000;
        border-radius: 5px;
        border: 1px solid #ddd;" required="">
</div>

            <div class="form-group">
                <label for="text" style="color: #fff;">Your Review</label>
                <textarea id="text" name="text" placeholder="Please enter your review here" style=" font-size: 0.9rem;  
        width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="image" style="color: #fff;">Your Profile Picture (optional)</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="photo" style="color: #fff;">Upload a Photo (optional)</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <div class="form-group">
    <label for="rating" style="color: #fff;">Rating (1-5 stars)</label>
    <div class="star-rating" style="font-size: 3rem;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s ease-in-out;">
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5" title="5 stars">★</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4" title="4 stars">★</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3" title="3 stars">★</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2" title="2 stars">★</label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1" title="1 star">★</label>
    </div>
</div>

            <div class="form-group">
                <button type="submit" name="submit" style="padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;">Submit Review</button>
            </div>
        </form>
    </div>

         
    </div>

                                                   
 
 
                      

                    <!-- Footer -->

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <div id="toast-container" class="toast-top-left">
            <div class="toast toast-success bg-success" aria-live="polite" style="background-color: black;">
                <div class="toast-title"> </div>
                <div class="toast-message"> </div>
            </div>
        </div>


    </div>

    
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./reviews_files/jquery.js.download"></script>
    <script src="./reviews_files/popper.js.download"></script>
    <script src="./reviews_files/bootstrap.js.download"></script>
    <script src="./reviews_files/perfect-scrollbar.js.download"></script>

    <script src="./reviews_files/menu.js.download"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./reviews_files/apexcharts.js.download"></script>

    <!-- Main JS -->
    <script src="./reviews_files/main.js.download"></script>

    <!-- Page JS -->
    <script src="./reviews_files/dashboards-analytics.js.download"></script>

    <script src="./reviews_files/bootstrap.min.js.download" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="./reviews_files/toast.js.download"></script>

    <script src="./reviews_files/jquery.dataTables.js.download"></script>




<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><iframe id="tidio-chat-code" title="Tidio Chat code" style="display: none;" src="./reviews_files/saved_resource"></iframe><div id="tidio-chat" style="position: fixed; z-index: 999999999 !important;"><iframe title="Tidio Chat" id="tidio-chat-iframe" style="display: block; border: none; position: fixed; inset: auto 9px 35px auto; width: 264px; height: 94px; opacity: 1; color-scheme: none; background: none transparent !important; margin: 0px; max-height: 100%; max-width: 100vw; transform: translateY(0px); transition: none !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;" src="./reviews_files/saved_resource(1)"></iframe></div></body></html>