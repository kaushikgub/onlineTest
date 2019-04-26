<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/instruction-style.css')}}">
</head>
<body onload="change()">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>
</header>
<section class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col bg-info">
                    <h4 id="">Instruction</h4>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-11 text-right">
                    <label id="vi">View In:</label>
                </div>
                <div class="col-md-1 text-left">
                    <select id="select" name="language" onchange="change()">
                        <option value="english">English</option>
                        <option value="hindi">Hindi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 id="ni">Navigating to a Question:</h6>
                    <div class="container">
                        <ol>
                            <li id="4">To answer a question, do the following: </li>
                            <div class="container">
                                <ul style="font-size: 14px;">
                                    <li id="41">Click on the question number in the Question Palette to go to that question directly.</li>
                                    <li id="42">Select an answer for a multiple choice type question. Use the virtual numeric keypad to enter a number as answer for a numerical type question.</li>
                                    <li id="43">Click on Save &Next to save your answer for the current question and then go to the next question.</li>
                                    <li id="44">Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.</li>
                                    <li id="45" class="text-danger">Caution: Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on its question number.</li>
                                </ul>
                            </div>
                            <li id="5">You can view all the questions by clicking on the <span class="">Question Paper</span> button. Note that the options for multiple choice type questions will not be shown.</li>
                        </ol>
                    </div>
                    <h6 id="aq">Answering a Question :</h6>
                    <div class="container">
                        <ol>
                            <li id="6">Procedure for answering a multiple choice type question:</li>
                            <div class="container">
                                <ul style="font-size: 14px;">
                                    <li id="61">To select your answer, click on the button of one of the options</li>
                                    <li id="62">To deselect your chosen answer, click on the button of the chosen option again or click on the Clear Response button</li>
                                    <li id="63">To change your chosen answer, click on the button of another option</li>
                                    <li id="64">To save your answer, you MUST click on the Save & Next button</li>
                                    <li id="65">To mark the question for review, click on the Mark for Review & Next button. <span class="text-danger font-italic font-weight-bold">If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span></li>
                                </ul>
                            </div>
                            <li id="7">Procedure for answering a numerical answer type question:</li>
                            <div class="container">
                                <ul style="font-size: 14px">
                                    <li id="71">To enter a number as your answer, use the virtual numerical keypad</li>
                                    <li id="72">A fraction (eg. -0.3 or -.3) can be entered as an answer with or without '0' before the decimal point</li>
                                    <li id="73">To clear your answer, click on the Clear Response button</li>
                                    <li id="74">To save your answer, you MUST click on the Save & Next button</li>
                                    <li id="75">To mark the question for review, click on the Mark for Review & Next button. <span class="font-weight-bold text-danger font-italic">If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span></li>
                                </ul>
                            </div>
                            <li id="8">To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</li>
                            <li id="9">Note that ONLY Questions for which answers are saved or marked for review after answering will be considered for evaluation.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <a class="btn btn-secondary pr-5 pl-5 mt-3" href="{{url('student/instruction3')}}">Next</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-lg-5 text-center">
            <img src="{{asset('/image/user.png')}}">
        </div>
    </div>
</section>
<footer>

</footer>

<script>
    function change() {
        var language = document.getElementById('select').value;
        //alert("ok?");

        if (language=="hindi"){
            document.getElementById('ni').innerHTML = "किसी प्रश्न पर जाना :";
            document.getElementById('4').innerHTML = "उत्तर देने हेतु कोई प्रश्न चुनने के लिए, आप निम्न में से कोई एक कार्य कर सकते हैं:";
            document.getElementById('41').innerHTML = "स्क्रीन के दांयी ओर प्रश्न पट्टिका में प्रश्न पर सीधे जाने के लिए प्रश्न संख्या पर क्लिक करें। ध्यान दें कि इस विकल्प का प्रयोग करने से मौजूदा प्रश्न के लिए आपका उत्तर सुरक्षित नहीं होता है।";
            document.getElementById('42').innerHTML = "र्तमान प्रश्न का उत्तर सुरक्षित करने के लिए और क्रम में अगले प्रश्न पर जाने के लिए Save and Next पर क्लिक करें।";
            document.getElementById('43').innerHTML = "वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए, पुनर्विचार के लिए चिन्हित करने और क्रम में अगले प्रश्न पर जाने के लिए Mark for Review and Next पर क्लिक करें।";
            document.getElementById('44').innerHTML = "";
            document.getElementById('45').innerHTML = "";
            document.getElementById('5').innerHTML = "आप Question Paper बटन पर क्लिक करके संपूर्ण प्रश्नपत्र को देख सकते हैं।";
            document.getElementById('aq').innerHTML = "प्रश्नों का उत्तर देना :";
            document.getElementById('6').innerHTML = "बहुविकल्प प्रकार प्रश्न के लिए";
            document.getElementById('61').innerHTML = "अपना उत्तर चुनने के लिए, विकल्प बटनों में से किसी एक पर क्लिक करें।";
            document.getElementById('62').innerHTML = "अपना उत्तर बदलने के लिए, अन्य वांछित विकल्प बटन पर क्लिक करें।";
            document.getElementById('63').innerHTML = "अपना उत्तर सुरक्षित करने के लिए, आपको Save & Next पर क्लिक करना जरूरी है।";
            document.getElementById('64').innerHTML = "चयनित उत्तर को अचयनित करने के लिए, चयनित विकल्प पर दुबारा क्लिक करें या Clear Response बटन पर क्लिक करें।";
            document.getElementById('65').innerHTML = "किसी प्रश्न को पुनर्विचार के लिए चिन्हित करने हेतु Mark for Review & Next पर क्लिक करें। <span class=\"text-danger\">यदि किसी प्रश्न के लिए उत्तर चुना हो जोकि पुनर्विचार के लिए चिन्हित किया है, तब अंतिम मूल्यांकन में उस उत्तर पर ध्यान दिया जाएगा।</span>";
            document.getElementById('7').innerHTML = "संख्यात्मक उत्तर प्रकार के प्रश्न के लिए";
            document.getElementById('71').innerHTML = "अपने उत्तर के रूप में नंबर दर्ज करने के लिए, वर्चुअल न्यूमेरिकल कीपैड का प्रयोग करें।";
            document.getElementById('72').innerHTML = "एक अंश (उदाहरण के लिए 0.3 या -0.3) दशमलव बिंदु से पहले केवल '0' के साथ उत्तर के रूप में दर्ज किया जा सकता है।";
            document.getElementById('73').innerHTML = "अपना उत्तर सुरक्षित करने के लिए, आपको Save & Next पर क्लिक करना जरूरी है।";
            document.getElementById('74').innerHTML = "अपना उत्तर मिटाने के लिए, Clear Response बटन पर क्लिक करें।";
            document.getElementById('75').innerHTML = "";
            document.getElementById('8').innerHTML = "किसी प्रश्न का उत्तर बदलने के लिए, पहले प्रश्न का चयन करें, फिर नए उत्तर विकल्प पर क्लिक करने के बाद Save & Next बटन पर क्लिक करें।";
            document.getElementById('9').innerHTML = "उत्तर देने के बाद जो प्रश्न सुरक्षित हैं या पुनर्विचार के लिए चिन्हित है, सिर्फ उन पर ही मूल्यांकन के लिए ध्यान दिया जाएगा।";
            return false;
        }
        if (language=="english"){
            document.getElementById('ni').innerHTML = "Navigating to a Question:";
            document.getElementById('4').innerHTML = "To answer a question, do the following: ";
            document.getElementById('41').innerHTML = "Click on the question number in the Question Palette to go to that question directly.";
            document.getElementById('42').innerHTML = "Select an answer for a multiple choice type question. Use the virtual numeric keypad to enter a number as answer for a numerical type question.";
            document.getElementById('43').innerHTML = "Click on Save &Next to save your answer for the current question and then go to the next question.";
            document.getElementById('44').innerHTML = "Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.";
            document.getElementById('45').innerHTML = "Caution: Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on its question number.";
            document.getElementById('5').innerHTML = "You can view all the questions by clicking on the <span class=\"\">Question Paper</span> button. Note that the options for multiple choice type questions will not be shown.";
            document.getElementById('aq').innerHTML = "Answering a Question :";
            document.getElementById('6').innerHTML = "Procedure for answering a multiple choice type question:";
            document.getElementById('61').innerHTML = "To select your answer, click on the button of one of the options";
            document.getElementById('62').innerHTML = "To deselect your chosen answer, click on the button of the chosen option again or click on the Clear Response button";
            document.getElementById('63').innerHTML = "To change your chosen answer, click on the button of another option";
            document.getElementById('64').innerHTML = "To save your answer, you MUST click on the Save & Next button";
            document.getElementById('65').innerHTML = "To mark the question for review, click on the Mark for Review & Next button. <span class=\"text-danger font-italic font-weight-bold\">If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span>";
            document.getElementById('7').innerHTML = "Procedure for answering a numerical answer type question:";
            document.getElementById('71').innerHTML = "To enter a number as your answer, use the virtual numerical keypad";
            document.getElementById('72').innerHTML = "A fraction (eg. -0.3 or -.3) can be entered as an answer with or without '0' before the decimal point";
            document.getElementById('73').innerHTML = "To clear your answer, click on the Clear Response button";
            document.getElementById('74').innerHTML = "To save your answer, you MUST click on the Save & Next button";
            document.getElementById('75').innerHTML = "To mark the question for review, click on the Mark for Review & Next button. <span class=\"font-weight-bold text-danger font-italic\">If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span>";
            document.getElementById('8').innerHTML = "To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.";
            document.getElementById('9').innerHTML = "Note that ONLY Questions for which answers are saved or marked for review after answering will be considered for evaluation.";
            return false;
        }
    }
</script>
</body>
</html>
