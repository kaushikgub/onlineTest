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
                    <h6 id="oq">Choosing an Optional Section :</h6>
                    <div class="container">
                        <ul style="list-style-type: none">
                            <li id="10">1. Sections in this question paper are displayed on the top bar of the screen. Questions in a Section can be viewed by clicking on the name of that Section. The Section you are currently viewing is highlighted.</li>
                            <li id="11">2. A checkbox is displayed for every optional Section in the Question Paper. To select an optional Section for answering, click on the checkbox for that Section.</li>
                            <li id="12">3. If the checkbox for an optional Section is not selected, the Save & Next button and the <span class="text-danger font-italic font-weight-bold">Mark for Review & Next</span> button will NOT be enabled for that Section. You will be able to only see questions in the Section, but you will not be able to answer questions in the Section.</li>
                            <li id="13">4. After clicking the <span class="font-weight-bold font-italic text-danger">Save & Next</span> button for the last question in a Section, you will automatically be taken to the first question of the next Section in sequence.</li>
                            <li id="14">5. You can move the mouse cursor over the name of a Section to view the answering status for that Section.</li>
                        </ul>
                    </div>
                    <h6 id="co" class="">Changing the Optional Section :</h6>
                    <div class="container">
                        <ul style="list-style-type: none">
                            <li id="15">1. After answering the chosen optional Sections, partially or completely, you can change an optional Section by selecting a checkbox for a new Section that you want to attempt. A warning message will appear along with a table showing the number of questions answered in each of the previously chosen optional Sections and a checkbox against each of these Sections. Click on a checkbox against a Section that you want to reset and then click on the RESET button.<span class="font-italic font-weight-bold text-danger">Note that RESETTING a Section will DELETE all the answers for questions in that Section. Hence, if you think that you may want to select this Section again later, you will have to note down your answers for questions in that Section.</span> If you do not want to reset any Section and want to continue answering the previously chosen optional Sections, then click on the BACK button.</li>
                            <li id="16">2. If you deselect the checkbox for an optional Section in the top bar, the following warning message will appear: "Deselecting the checkbox will DELETE all the answers for questions in this Section. Do you want to deselect this Section?" If you want to deselect, click on the <span class="font-weight-bold">RESET</span> button. If you do not want to deselect, click on the <span class="font-weight-bold">BACK</span> button.</li>
                            <li id="17">3. You can shuffle between different Sections any number of times. You can change the optional Sections any number of times.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                {{--<div class="col-md-6 float-left text-left">--}}
                    {{--<a class="btn btn-secondary pr-5 pl-5 mt-3" href="{{url('/student/instruction2')}}">< Previous</a>--}}
                {{--</div>--}}
                <div class="col float-right text-right">
                    <a class="btn btn-secondary pr-5 pl-5 mt-3" href="{{url('/student/conform')}}">Next</a>
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
            document.getElementById('oq').innerHTML="खंडों द्वारा प्रश्न पर जाना:";
            document.getElementById('co').innerHTML="";
            document.getElementById('10').innerHTML="1. इस प्रश्नपत्र में स्क्रीन के शीर्ष बार पर खंड प्रदर्शित होते हैं। किसी खंड में प्रश्न, खंड नाम पर क्लिक करके देखे जा सकते हैं। आप वर्तमान में जिस खंड का उत्तर दे रहे हैं, वह प्रकाशमान होगा।";
            document.getElementById('11').innerHTML="2. किसी खंड के लिए अंतिम प्रश्न के Save & Next बटन पर क्लिक करने के बाद, आप स्वचालित रूप से अगले खंड के प्रथम प्रश्न पर पहुंच जाओगे।";
            document.getElementById('12').innerHTML="3. आप उस खंड के लिए प्रश्नों की स्थिति को देखने हेतु खंड नाम के ऊपर माउस कर्सर मूव कर सकते हो।";
            document.getElementById('13').innerHTML="4. आप परीक्षा के दौरान किसी भी समय खंडों और प्रश्नों के बीच अपनी सुविधा के अनुसार फेरबदल कर सकते हो।";
            document.getElementById('14').innerHTML="";
            document.getElementById('15').innerHTML="";
            document.getElementById('16').innerHTML="";
            document.getElementById('17').innerHTML="";
            return false;
        }
        if (language=="english"){
            document.getElementById('oq').innerHTML="Choosing an Optional Section :";
            document.getElementById('co').innerHTML="Changing the Optional Section :";
            document.getElementById('10').innerHTML="1. Sections in this question paper are displayed on the top bar of the screen. Questions in a Section can be viewed by clicking on the name of that Section. The Section you are currently viewing is highlighted.";
            document.getElementById('11').innerHTML="2. A checkbox is displayed for every optional Section in the Question Paper. To select an optional Section for answering, click on the checkbox for that Section.";
            document.getElementById('12').innerHTML="3. If the checkbox for an optional Section is not selected, the Save & Next button and the <span class=\"text-danger font-italic font-weight-bold\">Mark for Review & Next</span> button will NOT be enabled for that Section. You will be able to only see questions in the Section, but you will not be able to answer questions in the Section.";
            document.getElementById('13').innerHTML="4. After clicking the <span class=\"font-weight-bold font-italic text-danger\">Save & Next</span> button for the last question in a Section, you will automatically be taken to the first question of the next Section in sequence.";
            document.getElementById('14').innerHTML="5. You can move the mouse cursor over the name of a Section to view the answering status for that Section.";
            document.getElementById('15').innerHTML="1. After answering the chosen optional Sections, partially or completely, you can change an optional Section by selecting a checkbox for a new Section that you want to attempt. A warning message will appear along with a table showing the number of questions answered in each of the previously chosen optional Sections and a checkbox against each of these Sections. Click on a checkbox against a Section that you want to reset and then click on the RESET button.<span class=\"font-italic font-weight-bold text-danger\">Note that RESETTING a Section will DELETE all the answers for questions in that Section. Hence, if you think that you may want to select this Section again later, you will have to note down your answers for questions in that Section.</span> If you do not want to reset any Section and want to continue answering the previously chosen optional Sections, then click on the BACK button.";
            document.getElementById('16').innerHTML="2. If you deselect the checkbox for an optional Section in the top bar, the following warning message will appear: \"Deselecting the checkbox will DELETE all the answers for questions in this Section. Do you want to deselect this Section?\" If you want to deselect, click on the <span class=\"font-weight-bold\">RESET</span> button. If you do not want to deselect, click on the <span class=\"font-weight-bold\">BACK</span> button.";
            document.getElementById('17').innerHTML="3. You can shuffle between different Sections any number of times. You can change the optional Sections any number of times.";
            return false;
        }
    }
</script>
</body>
</html>
