<?php 
session_start();
 $name = $_SESSION['name'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<html class="no-js" lang="en"> 

<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	

    
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    	
   	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="/css/datepicker3.css" type="text/css" /> 
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/jquery.date-dropdowns.js"></script>
    <script src="/js/masked-input.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
    
    

<style type="text/css">
	body {
		background-color:blue; 
		background: #FFFFFF 
		background-repeat: repeat;
		margin-left: 2px;
		margin-top: 30px;
		font-family: Trebuchet MS,Sans-Serif !important;
		font-size: Trebuchet MS,Sans-Serif;
    	opacity: 1;
    	transition: 0.4s opacity;
		}
	body.fade-out {
    	opacity: 0;
    	transition: none;
		}
	.surveyform {
		max-width: 640px;
		margin: 0 auto;
        }	
	h1{ 
		color: #66CC00; 
		font-weight: bold; 
		font-size: 30px; 
		line-height:normal;
		}	
	.table{ 
		text-align: center;
		margin:0;
		padding:0;
		}	
	.logo { 
		border: none; 
		margin:0; 
		padding-top:2px;
		padding-left:2px;
		padding-right:2px;
		text-align: Center;
		position:relative;
		width:inherit;}
	.panel {
		padding: 0px;
		margin: auto; 
		border-style: solid;  
		border-color: pink; 
		border-width: 20px; 
		background : #FFFFFF;	
				
		background-repeat: repeat; 
	}
	.panel-footer {
		background-color :transparent;	
		border:0;
		padding-left:0px;
		padding-top
	}
	.panel-footer a {
		font-size:9pt;
	}	
	.shadow {
		 -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		 -webkit-box-shadow: 10px 10px 10px #888;
		 box-shadow: 0px 0px 10px #888;
		 }		
	.surveytable {
		margin-top:12px;
		margin-left:0px;
		border-collapse: collapse;
		width:100%;
		}
	.alt1 {
	 	background-color:#33CC00;}
	.alt2 {
	 	background-color:#EEEEEE;}	
	.hilight {
	 	background-color:#33CC00;}
	input.error { border: 1px solid red; margin-right: 5px;}
	div.error {text-align:center;}
	textarea.error { border: 1px solid red; }
	select.error { border: 1px solid red; }
	option.error { border: 1px solid red; }				
	.section { 
		color: #000000; 
		font-weight: Bold  ; 
		margin-top:2em;
		margin-bottom:1em;
		font-size: 16px; 
	}
	h5 {
		font-style: normal;
		color : #000000;
		text-align: left;  
		font-size: 14px;
		font-weight: bold;}
	.preamble,p {
		color: #444444;
		margin-top:10px;
		margin-bottom:5px;
		width:100%;}				
	.question {
		color:#FFFFFF; 
		padding-top:3px;
		padding-bottom:5px; 
		
		background-color:#FF9900; 
		 
		height:inherit; 
		line-height:inherit; 
		font-size: 14px !important;
		font-weight:Bold !important;;
		text-align:left;}	
	p.question {
		margin-top:20px;
	}
	.questiontext {
		color: #444444;
		font-style: normal !important;
		font-size: Trebuchet MS,Sans-Serif !important;
		margin-bottom: 10px; 
		padding:4px;
		width:100%;}	
	.questiontext tr {
		padding-bottom:12px;
		padding-right:15px; }					
	.inputtext {
		color: black;
		border:1px solid #cccccc;
		font-style: normal;
		line-height: 150%;
		font-size: 14px; 
	}
	.questionbox{
		font-size: 14px;
	}
	.form-control {
		font-size: Trebuchet MS,Sans-Serif ;
	}
	.selectbox{
		font-size: Trebuchet MS,Sans-Serif;
	}
	a:link, a:visited, a:hover, a:active {
		color: #3333FF;}
	hr {
		border: 1px solid #66CC00; }
	.header { 
		width:100%;
		margin:0;}
	.mainbody {
		margin-left:30px;
		margin-right:30px; 
		padding-top:1px;
		padding-bottom:1px;}		
	.title {
		padding-top:15px;
		padding-bottom:15px;
		background:#FFFFFF;
		color:#66CC00;  
		font-weight: Bold  ; 
		font-size:30px;
		text-align: center;}
	.forcevar {
		font-size: 150%;
		line-height:0;
		color:red;
		margin:0;}		
	.over {
		background:#33CC00;} 
	.out {
		background:#FFFFFF;}	
	.buttons{
		margin-top:1em;
		text-align: Left;}		

	.qtext {
		font-size:14px;color:#444444; ; width:100%; text-align:left; border-left: 1px solid #66CC00;border-bottom: 1px solid #66CC00; text-indent:10px;}
	td.qhead{
		border-bottom: 1px solid #ccc;
		border-top: 1px solid #ccc;
		border-left: 1px solid #ccc;
		background-color: #33CC00;
		text-align: center;
		min-width: 50px; 
		font-weight: bold;
		color: #000000;
		padding:5px;  }
	td.qbody{ 
		border-bottom: 1px solid #ccc;
		border-top: 0px;
		border-left: 1px solid #ccc;
		border-right: 0px;
		text-align: center;
		padding:5px; }
	td.qtop{ 
		border-bottom: 1px solid #ccc;
		border-top: 1px solid #ccc;
		border-left: 1px solid #ccc;
		border-right: 0px;
		text-align: center;
		padding:5px; }
	.error_strings {
		border-color: #66CC00; 
		font-size: 14px; 
		color:red;}
	.dbar { 
		width:100%;
		border:none;
		height:0px; 
		color:red;
		color:red; 
		background-color:red; }	
	.qbox { 
		display:inline-block;
		margin-bottom: -2px;  }
	.qalign	 {
		width:100%;
		margin-left:22px; 
		margin-top:-17px; 
		margin-bottom:10px;
		vertical-align:top;  }
	.input-group {
		width:100%;
		margin-top:10px;
		white-space:nowrap; }			
	
	.textboxinfo {color:#444444;font-size: 12px;font-style: italic;	width:300; font-weight:normal;}	 
	.progress-bar {
		background-color: #FF9900 !important;
	}
	.agree {
		font-weight:normal;
	}
	.leftjustify {
		margin-left: -15px;
	}
	.custom {
		
	}
	 .panel-body {
		 margin-top:0;
		 padding-top:0;
	 }
	 
	.point {
		cursor: pointer; 
		cursor: hand;
	}
	.input-width-100 {
	  display: inline-block;
	  width: 100%;
	  min-height: 30px;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}
	h1.title {
		padding-left:30px;
		padding-right:30px;
		margin:0;
	}
.right { text-align: right; }
.btn, .form-control {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
	
	.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
.btn-send, 
.btn-send:hover,
.btn-send:active,
.btn-send:visited,
.btn-send:focus {
	background-color: ;
	border: 1px solid ;
}	
.checkbox-inline, .radio-inline {
    margin-bottom: 4px;
}	

	

	 @media only screen and (min-device-width : 320px) and (max-device-width : 480px), 
        screen and (min-width : 320px) and (max-width : 480px) {
			.surveyform {
            max-width: 480px;
            margin: 0 auto;
      
		}
		
		@media only screen and (min-width: 480px) {
			

}

// Pads and larger phones
@media only screen and (min-width: 600px) {

}

// Larger pads
@media only screen and (min-width: 768px) {

}

// Horizontal pads and laptops
@media only screen and (min-width: 992px) {

}

// Really large screens
@media only screen and (min-width: 1382px) {

}

// 2X size (iPhone 4 etc)
@media only screen and 
        (-webkit-min-device-pixel-ratio: 1.5), only screen and 
        (-o-min-device-pixel-ratio: 3/2), only screen and 
        (min-device-pixel-ratio: 1.5) {

}
	
.checkbox label:after,
.radio label:after {
  content: '';
  display: table;
  clear: both; }

.checkbox .cr,
.radio .cr {
  position: relative;
  display: inline-block;
  border: 1px solid #a9a9a9;
  border-radius: .25em;
  width: 1.3em;
  height: 1.3em;
  float: left;
  margin-right: .5em; }

.radio .cr {
  border-radius: 50%; }

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
  position: absolute;
  font-size: .8em;
  line-height: 0;
  top: 50%;
  left: 20%; }

.radio .cr .cr-icon {
  margin-left: 0.04em; }

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
	visibility:hidden;
  xdisplay: none; }

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
  transform: scale(3) rotateZ(-20deg);
  opacity: 0;
  transition: all .3s ease-in; }

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
  transform: scale(1) rotateZ(0deg);
  opacity: 1; }

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
  opacity: .5; }*/	

div.other {
	margin-left:15px; 
	margin-bottom:5px;
}
input[class="other"] {
	display:block;
	padding-top:5px;
	padding-bottom:5px;
}

</style>
  
    <!-- Custom styles for this template -->
    
    <style type="text/css">
       @-moz-document url-prefix() {
		  fieldset { display: table-cell; }
		} 
		label.error {display:none;padding-left:5px;}
		.recaptchatable #recaptcha_image{
  		overflow:hidden;
		}
 	
		input.dirty:not(:focus):invalid {
        background-color: #FFD9D9;
      }
      input.dirty:not(:focus):valid {
        background-color: #D9FFD9;
      }
	  .error { 
	  	font-weight: normal !important;}
      input.error {
		border:1px solid red;
		}	
	input.success {
		border:1px solid green;
		}	
	label.error {
		color:red;
		font-size:12px;
		font-weight:normal;
		font-style:italic; }
	label.valid {
        width: 24px;
        height: 24px;
        background: url(/assets/img/valid.png) center center no-repeat;
        display: inline-block;
        text-indent: -9999px;
    }
	.datepicker {
		margin-top: 34px;
	}
	.center {
		text-align: center;
	}
	.right {
		margin-left: auto;
	}
	.qspacer {
		padding:0px;
		margin-top:5px;
		margin-bottom:5px;		
	}
	.bmargin10 {
		margin-bottom:10px !important;
	}
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
  		-webkit-appearance: none; 
  		margin: 0; 
	}	
	.strength-meter {
		background: none !important;
		font-weight: normal !important;
		border:none !important;
	}	
	.datedropdown select {
        background: #ffffff none repeat scroll 0 0;
        border: 1px solid #cccccc;
        border-radius: 3px;
        margin: 0px 3px  10px;
        padding: 8px;
    }
	.hide {
		display:none;
	}
    .ErrorDiv {
        background-color: #f2dede;
        padding:20px;
        margin-top:15px;
        color:#a94442;
        border:1px solid #a94442;
        border-radius: 3px;
    }
    .input-sm { 
        border:1px solid #ccc !important;
        margin-right:5px;
        margin-bottom:5px;
        }      
   #idpc_error_message {color:#a94442 !important;}   
   .table.table-borderless td, .table.table-borderless th {
    border: 0 !important; }  
    label:hover, label:active, input:hover+label, input:active+label {
    background:#eee; 
}
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .1em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    xtransition: all .1s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,

.checkbox label, .radio label {
    padding-left:0;
}    
</head>


    <body id="form"> 

    <noscript>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Javascript is required to complete this form!</h4>
            <p>Your browser has JavaScript disabled or blocked. Please <a class="alert-link" href="">enable JavaScript</a> and try again.</p>
        </div>     
        <style type="text/css">
            #styleform { display:none;}
            .alert { margin: auto; display: table;}
        </style>
    </noscript>
    <script>document.body.className += ' fade-out';</script>      
		
        <form class="surveyform" action="" method="post" >
			
                    
            <div id="styleform" class="panel">
                <div id="header">
                    
                        <p class="logo"> 
                            
                                <img src="adityalogo.png" class="img-responsive center-block" alt="Logo /Wri">
                            </p>
                     
                </div>
                 
               	 	<h1 class="title">Student Feedback Form </h1>
              
                
                <div id="style" class="panel-body">    
                    	
                            
                        	  
                            
		Name:<input type="hidden"  name="name" value="<?php echo $name;?>">
		<?php echo $name;?>
         <div id="style1">                       
        <p class="question">
            <a name="a1" id="ar1"></a>
            <span id="qno1"></span>&nbsp;
            <span id="qq1">Please select your level of agreement below on how Form  its students.<span class="forcevar" id="qf1"></span></span>
            <label for="ar1"></label>
        </p>
    
<div class="form-group">
<table class="table table-bordered table-responsive" cellspacing="0" width="100%">
	<tr><td class="qhead questiontext alt1"></td>
	
			<td class="qhead questiontext alt1" style="vertical-align:middle;"><span id="pagea1">Strongly Agree</span></td>
		
			<td class="qhead questiontext alt1" style="vertical-align:middle;"><span id="pageb1">Agree</span></td>
		
			<td class="qhead questiontext alt1" style="vertical-align:middle;"><span id="pagec1">Neutral</span></td>
		
			<td class="qhead questiontext alt1" style="vertical-align:middle;"><span id="paged1">Disagree</span></td>
		
			<td class="qhead questiontext alt1" style="vertical-align:middle;"><span id="pagei1">Strongly Disagree</span></td>
		
	</tr>
	
		<tr class="srow"><td id="pagee1" class="questiontext alt2 text-left" style="vertical-align:middle;">1.The content of this  course was valuable</td>
			
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field"
                            name="page1e" value="StronglyAgree" 
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
             
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio"  
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1e" value="Agree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1e" value="Neutral"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio"  class="radio" 
                            data-validation-error-msg="Please complete this required field" data-validation=""
                            name="page1e" value="Disagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" name="page1e" value="StronglyDisagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
                   
            </tr>		
	
		<tr class="srow"><td id="pagef1" class="questiontext alt2 text-left" style="vertical-align:middle;">2.I am satisfied that the learning objectives were met</td>
			
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field"
                            name="page1f" value="StronglyAgree" 
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
             
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio"  
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1f" value="Agree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1f" value="Neutral"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio"  class="radio" 
                            data-validation-error-msg="Please complete this required field" data-validation=""
                            name="page1f" value="Disagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" name="page1f" value="StronglyDisagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
                   
            </tr>		
	
		<tr class="srow"><td id="pageg1" class="questiontext alt2 text-left" style="vertical-align:middle;">3.The written materials helped me understand the content of the class</td>
			
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field"
                            name="page1g" value="StronglyAgree" 
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
             
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio"  
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1g" value="Agree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1g" value="Neutral"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio"  class="radio" 
                            data-validation-error-msg="Please complete this required field" data-validation=""
                            name="page1g" value="Disagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" name="page1g" value="StronglyDisagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
                   
            </tr>		
	
		<tr class="srow"><td id="pageh1" class="questiontext alt2 text-left" style="vertical-align:middle;">4.I will apply the skills/ knowledge learned from this course</td>
			
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field"
                            name="page1h" value="StronglyAgree" 
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
             
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio"  
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1h" value="Agree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" 
                            name="page1h" value="Neutral"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio"  class="radio" 
                            data-validation-error-msg="Please complete this required field" data-validation=""
                            name="page1h" value="Disagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
            
            	<td class="qbody alt2">
                    <div class="radio">
                        <label class="radio-inline questiontext" style="padding-left:20px;">
                            <input type="radio" class="radio" 
                            data-validation=""
                            data-validation-error-msg="Please complete this required field" name="page1h" value="StronglyDisagree"  
                            >
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                    </div>
                </td>
                   
            </tr>		
	
</table>
</div>

                            </div>
                        	  
                            <div id="style2">
                                
        <p class="question">
            <a name="a2" id="ar2"></a>
            <span id="qno2"></span>&nbsp;
            <span id="qq2">Do you have any other comments regarding the course, presenters or materials?<span class="forcevar" id="qf2"></span></span>
            <label for="ar2"></label>
        </p>
    
<label style="display:inherit;" for = "page2"></label>
<div class="qcontainer">
	<div class="form-group">
        <textarea name="page2" 
        	id="qtext2" 
            style="height:8em; width:100%;" 
            class="form-control"
            data-validation-error-msg="Please complete this field" 
            data-validation=""></textarea>
        
        	<span id="charlimitinfo2" class="textboxinfo">.</span>
        
   


	

    </div>
                                   
             <div class="buttons">
              
           <center> <input class="btn btn-primary has-spinner btn-md" type="Submit" ID="ButtonAcceptTerms" 
                    name="submit"  value="submit"  ></center>     
			</div>
         
 </form>
 </div>
    </div>	
    </div>	
	
</body>
</html>
<?php

include("conn.php");

if(isset($_POST['submit']))
	
{
	$a=$_POST['name'];
	$b=$_POST['page1e'];
	$c=$_POST['page1f'];
	$d=$_POST['page1g'];
	$e=$_POST['page1h'];
	$f=$_POST['page2'];
	$insert="INSERT INTO studentdata(Name,valuable,satisfied,practice,knowledge,materials)VALUES('$a','$b','$c','$d','$e','$f')";
	$dinsert=mysqli_query($conn,$insert);
	if($dinsert)
	{
	echo "<script>alert('succeessfully submitted');</script>";
		echo "<script> location.href = 'last.php' </script>";
		
	}
	
	else
	{
		echo mysqli_error($conn);
	}
}
?>



