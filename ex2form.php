<?php 
session_start();
 $name = $_SESSION['name'];
 ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">

 <html class="no-js" lang="en"> <!--<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="GENERATOR" content="Formwize 7.1.07">
    <meta name="ORIGINATOR" content="Formwize 7.1.07">
    <meta name="DESCRIPTION" content="Questionnaire created by Formwize, www.formwize.com">
    <meta name="AUTHOR" content="Formwize Generated">
    <meta name="KEYWORDS" content="Formwize">
    
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
		background-color:#eeeeee; 
		background: #eeeeee 
		background-repeat: repeat;
		margin-left: 2px;
		margin-top: 30px;
		font-family: Trebuchet MS !important;
		font-size: Trebuchet MS;
    	opacity: 1;
    	transition: 0.4s opacity;
		}
	body.fade-out {
    	opacity: 0;
    	transition: none;
		}
	.surveyform {
		max-width: 600px;
		margin: 0 Auto;
        }	
	h1{ 
		color: #ffffff; 
		font-weight: bold; 
		font-size: 34px; 
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
		text-align: right;
		position:relative;
		width:inherit;}
	.panel {
		padding: 0px;
		margin: Auto; 
		border-style: solid;  
		border-color: #000000; 
		border-width: 2px; 
		background : #ffffff;	
				
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
	 	background-color:#e1e1e1;}
	.alt2 {
	 	background-color:#ffffff;}	
	.hilight {
	 	background-color:#e1e1e1;}
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
		font-size: 14px; 
	}
	h5 {
		font-style: normal;
		color : #000000;
		text-align: left;  
		font-size: 14px;
		font-weight: bold;}
	.preamble,p {
		color: #000000;
		margin-top:10px;
		margin-bottom:5px;
		width:100%;}				
	.question {
		color:#000000; 
		padding-top:3px;
		padding-bottom:5px; 
		 
		height:inherit; 
		line-height:inherit; 
		font-size: 14px !important;
		font-weight:Bold !important;;
		text-align:left;}	
	p.question {
		margin-top:20px;
	}
	.questiontext {
		color: #000000;
		font-style: normal !important;
		font-size: Trebuchet MS !important;
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
		font-size: Trebuchet MS ;
	}
	.selectbox{
		font-size: Trebuchet MS;
	}
	a:link, a:visited, a:hover, a:active {
		color: #ff0000;}
	hr {
		border: 1px solid #000000; }
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
		background:#000000;
		color:#ffffff;  
		font-weight: Bold  ; 
		font-size:34px;
		text-align: center;}
	.forcevar {
		font-size: 150%;
		line-height:0;
		color:red;
		margin:0;}		
	.over {
		background:#e1e1e1;} 
	.out {
		background:#ffffff;}	
	.buttons{
		margin-top:1em;
		text-align: Left;}		

	.qtext {
		font-size:14px;color:#000000; ; width:100%; text-align:left; border-left: 1px solid #000000;border-bottom: 1px solid #000000; text-indent:10px;}
	td.qhead{
		border-bottom: 1px solid #ccc;
		border-top: 1px solid #ccc;
		border-left: 1px solid #ccc;
		background-color: #e1e1e1;
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
		border-color: #000000; 
		font-size: 14px; 
		color:red;}
	.dbar { 
		width:100%;
		border:none;
		height:0px; 
		color:red;
		color:#0000ff; 
		background-color:#0000ff; }	
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
	
	.textboxinfo {color:#000000;font-size: 12px;font-style: italic;	width:300; font-weight:normal;}	 
	.progress-bar {
		background-color: 00ff00 !important;
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
</style>

<script type="text/javascript">

$(document).ready( function() { 
    $(".ErrorDiv").hide();
		$.validate({
        form : '#surveyform',
		modules : 'date, sanitize, file, security, location',  
        onError : function($form) {
            $('html, body').scrollTop( $(document).height() );
            $(".ErrorDiv").show();
        },
        onValidate : function($form) {
           $(".ErrorDiv").hide();
        },
        validateHiddenInputs: true,
		showHelpOnFocus: true,
        scrollToTopOnError: false,
		errorMessageClass : 'error',
		errorElementClass : 'errorelement',        
		onModulesLoaded : function() {
        var optionalConfig = {
            fontSize: '11pt',
            padding: '4px',
            bad : 'Bad',
            weak : 'Weak',
            good : 'Good',
            strong : 'Strong'
            };
         $('input[type="password"]').displayPasswordStrength(optionalConfig);
         $('input[id="country"]').suggestCountry();
        }			
  	});

    $(".pcheck").on("click", function() {
        var shdiv = '#' + $(this).closest("div").attr("id");  
        alert(shdiv);
        if(this.checked){
            $(shdiv).show();
        } else {
            $(shdiv).hide();
        }
    });

     $('.rating input').change(function () {
        var $radio = $(this);
		var myClass = '.'+$(this).closest("div").attr("class").split(" ")[1];
		$(myClass+' .selected').removeClass('selected');
        $radio.closest('label').addClass('selected');
    });

    $(".forcevar").hover(function() {
            $(this).css('cursor','pointer').attr('title', 'This question is mandatory.');
        }, function() {
            $(this).css('cursor','auto');
        });        
    });
$(function() {
    $('body').removeClass('fade-out');
});
</script>

<script type="text/javascript">
function limitChars(textid, limit, infodiv)
{
	var text = $('#'+textid).val();	
	var textlength = text.length;
	if(textlength > limit)
	{
		$('#' + infodiv).html('You cannot write more then '+limit+' characters!');
		$('#'+textid).val(text.substr(0,limit));
		return false;
	}
	else
	{
		$('#' + infodiv).html('You have '+ (limit - textlength) +' characters left.');
		return true;
	}
}

function getval(sel) {				
	var jumpto=(sel.id);
	$("#thisrow").val(jumpto);alert("jumpto");
}			

(function($){
	$.fn.textareaCounter = function(options, infodiv2) {
		// setting the defaults
		var defaults = {
			limit: 100
		};	
		var options = $.extend(defaults, options);
		// and the plugin begins
		return this.each(function() {
			var obj, text, wordcount, limited;
			
			obj = $(this);
			//$(qfield).html('Write your comment within '+options.limit+' words');
			obj.keyup(function() {
			    text = obj.val();
			    if(text === "") {
			    	wordcount = 0;
			    } else {
				    wordcount = $.trim(text).split(" ").length;
				}
			    if(wordcount > options.limit) {
			        $('#' + infodiv2).html('0 words left.');
					limited = $.trim(text).split(" ", options.limit);
					limited = limited.join(" ");
					$(this).val(limited);
			    } else {
			        $('#' + infodiv2).html('You have '+(options.limit - wordcount)+' words left.');
			    } 
			});
		});
	};
})(jQuery);
</script>

<script type="text/javascript"> 
	//This script clears the radio buttons if any have been checked 
	function checkChoice(field, i) {
	{
	for (i = 0; i < field.length; i++)
		field[i].checked = false;
		return true;}
	}

	function uncheckChoice(field, i) {
	{
	for (i = 0; i < field.length; i++)
		field[i].checked = true;
		return true;}
	}
	function checkboxcheck(fieldname){
		var pass=true;
		if (fieldname.length==undefined)
		{
		pass=false;
		}
		for (var idx = 0; idx < fieldname.length ; idx++){
			if (fieldname[idx].checked==true)
			pass=false;}
		return pass;	
	}
    
	function orderByClick(name, field, max) {
		if (surveyform.elements[field]!=null) { 
			if (surveyform.elements[field].value!='') {
				val = parseInt(surveyform.elements[field].value);
				surveyform.elements[field].value = '';
				for (i=0; i<surveyform.elements[name].length; i++){
					chp = surveyform.elements[name][i].value;
					if (surveyform.elements[chp]!=null) {
						cpt = parseInt(surveyform.elements[chp].value);
						if (cpt > val) {
							surveyform.elements[chp].value = parseInt(cpt) - 1;
						}
					}
				}
			} else if (!isNaN(surveyform.elements[name].length)) {
				lastval = 0;
				for (i=0; i<surveyform.elements[name].length; i++) {
					chp = surveyform.elements[name][i].value;
					if (surveyform.elements[chp]!=null) {
						cpt = parseInt(surveyform.elements[chp].value);
						if (lastval < cpt) lastval = cpt;
					}
				}
				if (lastval < max) {
					surveyform.elements[field].value = parseInt(lastval) + 1;
				}
			} else if (surveyform.elements[name]) {
				surveyform.elements[field].value = 1;
			}	
		}
	}
 </script>

<script type="text/javascript"> 
$(function() {
	  errors = [];
      $("#check-form").click( function()
           {
			 //$('#surveyform').get(0).reset();
			 var input = $("<input>")
               .attr("type", "hidden")
               .attr("name", "later").val("1");
				$('#surveyform').append($(input));
			 $("#surveyform")[0].submit();
           }
      );
});
</script>

<title>Course Evaluation</title>	

</head>


    <body id="form"> 

    <noscript>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Javascript is required to complete this form!</h4>
            <p>Your browser has JavaScript disabled or blocked. Please <a class="alert-link" href="http://enable-javascript.com/">enable JavaScript</a> and try again.</p>
        </div>     
        <style type="text/css">
            #styleform { display:none;}
            .alert { margin: auto; display: table;}
        </style>
    </noscript>
    <script>document.body.className += ' fade-out';</script>      
		
        <form class="surveyform" method="post" enctype= "multipart/form-data"  role="form">
			
              
            <div id="styleform" class="panel">
                <div id="header">
                     
                </div> 
                 
               	 	<h1 class="title">Course </h1>
                 
            <div class="panel-body">
                
                    
                
                <div id="style" class="panel-body">    
                    	  
                            <div id="style1">
                                
        <p class="question">
            <a name="a1" id="ar1"></a>
            
            <span id="qq1"> StudentName 	<span class="forcevar" id="qf1"></span></span>
            <label for="ar1"></label>
        </p>
    <div class="form-group has-feedback"> 
    
                	<div class="form-group input-append">
                    	
                        <input type="text"  name="name" value="<?php echo $name;?>" id="page1" class="form-control" maxlength="120"
                        value=""
                        data-validation-help=""
                        data-validation-error-msg="This field is required" data-validation-optional="true">
                        
                    </div>
				

            <div id="error-dialog" class="col-lg-12"></div>


                            </div>
                        	  
                            <div id="style2">
                                
        <p class="question">
            <a name="a2" id="ar2"></a>
            
            <span id="qq2">The content of this  course was valuable.<span class="forcevar" id="qf2">*</span></span>
            <label for="ar2"></label>
        </p>
    
<div class="row qcontainer">
    <div class="col-xs-12 form-group">
       
            
        <div align="center" id="ql2" style="display:table-cell; padding:5px; vertical-align:bottom;"></div> 
        
                    <div align="center" id="page2_a" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page2_1" >
                            
                            <span id="la2" class="questiontext agree">Strongly Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page2_1" value="Strongly" name="page2" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page2_b" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page2_2" >
                            
                            <span id="lb2" class="questiontext agree">Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page2_2" value="Agree" name="page2" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    
                
                    <div align="center" id="page2_d" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page2_4" >
                            
                            <span id="ld2" class="questiontext agree">Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page2_4" value="Disagree" name="page2" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page2_e" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page2_5" >
                            
                            <span id="le2" class="questiontext agree">Strongly Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page2_5" value="StronglyDisagree" name="page2" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
           
        <div align="center" id="qr2" style="display:table-cell; padding:5px; vertical-align:bottom;"></div>     
        
    </div>

 
    
            <input type="hidden" name="page2p" value="">
            <div id="comment2" style="display:none;"> </div>
        
</div>
  






                            </div>
                        	  
                           
                        	  
                            <div id="style4">
                                
        <p class="question">
            <a name="a4" id="ar4"></a>
            
            <span id="qq4">I am satisfied that the learning objectives were met.<span class="forcevar" id="qf4">*</span></span>
            <label for="ar4"></label>
        </p>
    
<div class="row qcontainer">
    <div class="col-xs-12 form-group">
       
            
        <div align="center" id="ql4" style="display:table-cell; padding:5px; vertical-align:bottom;"></div> 
        
                    <div align="center" id="page4_a" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page4_1" >
                            
                            <span id="la4" class="questiontext agree">Strongly Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page4_1" value="StronglyAgree" name="page4" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page4_b" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page4_2" >
                            
                            <span id="lb4" class="questiontext agree">Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page4_2" value="Agree" name="page4" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                       
                
                    <div align="center" id="page4_d" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page4_4" >
                            
                            <span id="ld4" class="questiontext agree">Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page4_4" value="Disagree" name="page4" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page4_e" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page4_5" >
                            
                            <span id="le4" class="questiontext agree">Strongly Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page4_5" value="StronglyDisagree" name="page4" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
           
        <div align="center" id="qr4" style="display:table-cell; padding:5px; vertical-align:bottom;"></div>     
        
    </div>

 
    
           
</div>
  






                            </div>
                        	  
                            <div id="style5">
                                
        <p class="question">
            <a name="a5" id="ar5"></a>
            
            <span id="qq5">I had sufficient time to practice what I learned<span class="forcevar" id="qf5">*</span></span>
            <label for="ar5"></label>
        </p>
    
<div class="row qcontainer">
    <div class="col-xs-12 form-group">
       
            
        <div align="center" id="ql5" style="display:table-cell; padding:5px; vertical-align:bottom;"></div> 
        
                    <div align="center" id="page5_a" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page5_1" >
                            
                            <span id="la5" class="questiontext agree">Strongly Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page5_1" value="StronglyAgree" name="page5" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page5_b" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page5_2" >
                            
                            <span id="lb5" class="questiontext agree">Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page5_2" value="Agree" name="page5" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                   
                
                    <div align="center" id="page5_d" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page5_4" >
                            
                            <span id="ld5" class="questiontext agree">Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page5_4" value="Disagree" name="page5" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page5_e" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page5_5" >
                            
                            <span id="le5" class="questiontext agree">Strongly Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page5_5" value="StronglyDisagree" name="page5" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
           
        <div align="center" id="qr5" style="display:table-cell; padding:5px; vertical-align:bottom;"></div>     
        
    </div>

 
    
            <input type="hidden" name="page5p" value="">
            <div id="comment5" style="display:none;"> </div>
        
</div>
  






                            </div>
                        	  
                            <div id="style6">
                                
        <p class="question">
            <a name="a6" id="ar6"></a>
            
            <span id="qq6">I will apply the skills/ knowledge learned from this course<span class="forcevar" id="qf6">*</span></span>
            <label for="ar6"></label>
        </p>
    
<div class="row qcontainer">
    <div class="col-xs-12 form-group">
       
            
        <div align="center" id="ql6" style="display:table-cell; padding:5px; vertical-align:bottom;"></div> 
        
                    <div align="center" id="page6_a" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page6_1" >
                            
                            <span id="la6" class="questiontext agree">Strongly Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page6_1" value="StronglyAgree" name="page6" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page6_b" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page6_2" >
                            
                            <span id="lb6" class="questiontext agree">Agree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page6_2" value="Agree" name="page6" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    
                
                    <div align="center" id="page6_d" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page6_4" >
                            
                            <span id="ld6" class="questiontext agree">Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page6_4" value="Disagree" name="page6" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
                    <div align="center" id="page6_e" style="display:table-cell;vertical-align:bottom;">	
                        <label for="page6_5" >
                            
                            <span id="le6" class="questiontext agree">Strongly Disagree&nbsp;&nbsp;</span> <br />        
                        </label>
                        <div class="radio"><label>
                        <input type="radio" id="page6_5" value="StronglyDisagree" name="page6" 
                        class="radio required"    
                        data-validation-error-msg="Please complete this required field"
                        data-validation="required">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        </label>
                        </div> 
                    </div>     
                
           
        <div align="center" id="qr6" style="display:table-cell; padding:5px; vertical-align:bottom;"></div>     
        
    </div>

 
    
            <input type="hidden" name="page6p" value="">
            <div id="comment6" style="display:none;"> </div>
        
</div>
  </div>
                        	  
                           






                        	  
            <div id="style15">
                                
        <p class="question">
            <a name="a15" id="ar15"></a>
            
            <span id="qq15">Do you have any other comments regarding the course, presenters or materials ?<span class="forcevar" id="qf15"></span></span>
            <label for="ar15"></label>
        </p>
    
<label style="display:inherit;" for = "page15"></label>
<div class="qcontainer">
	<div class="form-group">
        <textarea name="page15" 
        	id="qtext15" 
            style="height:8em; width:100%;" 
            class="form-control"
            data-validation-error-msg="Please complete this field" 
            data-validation=""></textarea>
        
       </div>
                                   
             <div class="buttons">
               
                
                  <center>  <input class="btn btn-send btn-success btn-md" type="Submit" ID="ButtonAcceptTerms" 
                    name="send" value="Send Form " title="Send Form" accesskey="S"/></center>
                    
               
            </div>
        
         
        </form>
	    </div>
        
	
  
    </div>	
	
  </body>

</html>
<?php

include("conn.php");

if(isset($_POST['send']))
	
{
	$ex=$_POST['name'];
	$co=$_POST['page2'];
	$name=$_POST['page4'];
	$email=$_POST['page5'];
	$sa=$_POST['page6'];
	$a=$_POST['page15'];
	$insert="INSERT INTO kkk(Name,valuable,satisfied,practice,knowledge,materials)VALUES('$ex','$co','$name','$email','$sa','$a')";
	$dinsert=mysqli_query($conn,$insert);
	if($dinsert)
	{
	echo "<script>alert('succeessfully submitted');</script>";
		echo "<script> location.href = '2login.php' </script>";
		
	}
	
	else
	{
		echo mysqli_error($conn);
	}
}
?>




