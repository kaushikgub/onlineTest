<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/instruction-style.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>
</header>
<section class="container">
    <div class="row ">
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
                    <h6 id="gi">General Instructions:</h6>
                    <div class="container">
                        <ol>
                            <li id="li1">Total duration of examination is 60 minutes.</li>
                            <li id="li2">The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.</li>
                            <li id="li3">The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols:</li>
                            <div class="container">
                                <ul style="font-size: 14px;list-style-type: none">
                                    <li class="mb-1" id="li11"><span class="btn btn-secondary">0</span> You have not visited the question yet.</li>
                                    <li class="mb-1" id="li12"><span class="btn btn-danger">0</span> You have not answered the question.</li>
                                    <li class="mb-1" id="li13"><span class="btn btn-success">0</span> You have answered the question.</li>
                                    <li class="mb-1" id="li14"><span class="btn btn-warning">0</span> You have NOT answered the question, but have marked the question for review.</li>
                                    <li class="mb-1" id="li15"><span class="btn btn-info">0</span> You have answered the question, but marked it for review.</li>
                                </ul>
                            </div>
                            <li id="li4">The Marked for Review status for a question simply indicates that you would like to look at that question again. <span  id="span" class="text-danger">If a question is answered and Marked for Review, your answer for that question will be considered in the evaluation.</span></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <a class="btn btn-secondary" href="{{url('student/instruction2')}}">Next</a>
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

        if (language=="hindi"){
            document.getElementById('li1').innerHTML="सभी प्रश्नों को हल करने के लिए आपको 120 मिनट का समय दिया जाएगा।";
            document.getElementById('li2').innerHTML="सर्वर पर घड़ी लगाई गई है तथा आपकी स्क्रीन के दाहिने कोने में शीर्ष पर काउंटडाउन टाइमर में आपके लिए परीक्षा समाप्त करने के लिए शेष समय प्रदर्शित होगा। परीक्षा समय समाप्त होने पर, आपको अपनी परीक्षा बंद या जमा करने की जरूरत नहीं है । यह स्वतः बंद या जमा हो जाएगी।";
            document.getElementById('li3').innerHTML="स्क्रीन के दाहिने कोने पर प्रश्न पैलेट, नंबर दिए प्रत्येक प्रश्न के लिए निम्न में से कोई एक स्थिति प्रकट करती है:";
            document.getElementById('li11').innerHTML="<span class=\"btn btn-secondary\">0</span> आप अभी तक प्रश्न पर नहीं गए हैं।";
            document.getElementById('li12').innerHTML="<span class=\"btn btn-danger\">0</span> आपने प्रश्न का उत्तर नहीं दिया है।";
            document.getElementById('li13').innerHTML="<span class=\"btn btn-success\">0</span> आप प्रश्न का उत्तर दे चुके हैं।";
            document.getElementById('li14').innerHTML="<span class=\"btn btn-warning\">0</span> आपने प्रश्न का उत्तर नहीं दिया है पर प्रश्न को पुनर्विचार के लिए चिन्हित किया है।";
            document.getElementById('li15').innerHTML="<span class=\"btn btn-info\">0</span> आप प्रश्न का उत्तर दे चुकें हैं पर प्रश्न को पुनर्विचार के लिए चिन्हित किया है।";
            document.getElementById('li4').innerHTML="पुनर्विचार के लिए चिन्हित स्थिति सामान्यत अनुस्मारक के रूप में कार्य करती है जोकि आपने प्रश्न को दुबारा देखने के लिए सेट किया है। <span  id=\"span\" class=\"text-danger\">यदि किसी प्रश्न के लिए उत्तर चुना हो जोकि पुनर्विचार के लिए चिन्हित किया है, तब अंतिम मूल्यांकन में उस उत्तर पर ध्यान दिया जाएगा।</span>";
            document.getElementById('li5').innerHTML="उत्तर देने हेतु कोई प्रश्न चुनने के लिए, आप निम्न में से कोई एक कार्य कर सकते हैं:";
            document.getElementById('li21').innerHTML="स्क्रीन के दांयी ओर प्रश्न पट्टिका में प्रश्न पर सीधे जाने के लिए प्रश्न संख्या पर क्लिक करें। ध्यान दें कि इस विकल्प का प्रयोग करने से मौजूदा प्रश्न के लिए आपका उत्तर सुरक्षित नहीं होता है।";
            document.getElementById('li22').innerHTML="वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए और क्रम में अगले प्रश्न पर जाने के लिए Save and Next पर क्लिक करें।";
            document.getElementById('li23').innerHTML="वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए, पुनर्विचार के लिए चिन्हित करने और क्रम में अगले प्रश्न पर जाने के लिए Mark for Review and Next पर क्लिक करें।";
            document.getElementById('li24').innerHTML="";
            document.getElementById('li25').innerHTML="";
            document.getElementById('li6').innerHTML="आप Question Paper बटन पर क्लिक करके संपूर्ण प्रश्नपत्र को देख सकते हैं।";
            document.getElementById('vi').innerHTML="View in : ";
            document.getElementById('gi').innerHTML="कृपया निम्नलिखित निर्देशों को ध्यान से पढ़ें :";
            return false;
        }
        if (language=="english"){
            document.getElementById('li1').innerHTML="Total duration of examination is 120 minutess.";
            document.getElementById('li2').innerHTML="The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.";
            document.getElementById('li3').innerHTML="The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols:";
            document.getElementById('li11').innerHTML="<span class=\"btn btn-secondary\">0</span> You have not visited the question yet.";
            document.getElementById('li12').innerHTML="<span class=\"btn btn-danger\">0</span> You have not answered the question.";
            document.getElementById('li13').innerHTML="<span class=\"btn btn-success\">0</span> You have answered the question.";
            document.getElementById('li14').innerHTML="<span class=\"btn btn-warning\">0</span> You have NOT answered the question, but have marked the question for review.";
            document.getElementById('li15').innerHTML="<span class=\"btn btn-info\">0</span> You have answered the question, but marked it for review.";
            document.getElementById('li4').innerHTML="The Marked for Review status for a question simply indicates that you would like to look at that question again. <span  id=\"span\" class=\"text-danger\">If a question is answered and Marked for Review, your answer for that question will be considered in the evaluation.</span>";
            document.getElementById('li5').innerHTML="To answer a question, do the following: ";
            document.getElementById('li21').innerHTML="Click on the question number in the Question Palette to go to that question directly.";
            document.getElementById('li22').innerHTML="Select an answer for a multiple choice type question. Use the virtual numeric keypad to enter a number as answer for a numerical type question.";
            document.getElementById('li23').innerHTML="Click on Save &Next to save your answer for the current question and then go to the next question.";
            document.getElementById('li24').innerHTML="Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.";
            document.getElementById('li25').innerHTML="Caution: Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on its question number.";
            document.getElementById('li6').innerHTML="You can view all the questions by clicking on the Question Paper button. Note that the options for multiple choice type questions will not be shown.";
            document.getElementById('vi').innerHTML="View in : ";
            document.getElementById('gi').innerHTML="General Instructions:";
            return false;
        }
    }
</script>
</body>
</html>
