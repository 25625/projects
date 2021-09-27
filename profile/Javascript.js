var txtInput;
var voiceList = document.querySelector('#voiceList');
var btnSpeak = document.querySelector('#btnSpeak');
var synth = window.speechSynthesis;
var voices = [];



function COF() {
    // body...
    txtInput = document.querySelector('#CareerObjective').innerHTML;
    voiced();
}
function Academic() {
    // body...
    txtInput = document.querySelector("#Academic").innerHTML;
    voiced();
}
function Skil() {
    // body...
    txtInput = document.querySelector("#Skil").innerHTML;
    voiced();
}
function prof() {
    // body...
    txtInput = document.querySelector("#first").innerHTML;
    voiced();
}
function pros() {
    // body...
    txtInput = document.querySelector("#second").innerHTML;
    voiced();
}
function prot() {
    // body...
    txtInput = document.querySelector("#third").innerHTML;
    voiced();
}
function Pro() {
    // body...
    txtInput = document.querySelector("#Projects").innerHTML;
    voiced();
}
function Intern() {
    // body...
    txtInput = document.querySelector('#intern').innerHTML;
    voiced();
}
function Certify() {
    // body...
    txtInput = document.querySelector('#certify').innerHTML;
    voiced();
}
function Activity(){
    txtInput = document.querySelector('#Activites').innerHTML;
    voiced();
}
function Personal(){
    txtInput = document.querySelector('#personal').innerHTML;
    voiced();
}




PopulateVoices();
if(speechSynthesis !== undefined){
    speechSynthesis.onvoiceschanged = PopulateVoices;
}
function voiced(){
    var toSpeak = new SpeechSynthesisUtterance(txtInput);
    var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
    voices.forEach((voice)=>{
        if(voice.name === selectedVoiceName){
            toSpeak.voice = voice;
        }
    });
    synth.speak(toSpeak);
}

function PopulateVoices(){
    voices = synth.getVoices();
    var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
    voiceList.innerHTML = '';
    voices.forEach((voice)=>{
        var listItem = document.createElement('option');
        listItem.textContent = voice.name;
        listItem.setAttribute('data-lang', voice.lang);
        listItem.setAttribute('data-name', voice.name);
        voiceList.appendChild(listItem);
    });

    voiceList.selectedIndex = selectedIndex;
}




function COBtnon() {
    // body...
    document.getElementById('COBtn').style.opacity = 1;
}
function COBtnOff() {
    // body...
    document.getElementById('COBtn').style.opacity = 0;
}

function AcaBtnon() {
    // body...
    document.getElementById('AcaBtn').style.opacity = 1;
}
function AcaBtnOff() {
    // body...
    document.getElementById('AcaBtn').style.opacity = 0;
}
// Skill button on and off
function SkiBtnon() {
    // body...
    document.getElementById('Ski').style.opacity = 1;
}
function SkiBtnOff() {
    // body...
    document.getElementById('Ski').style.opacity = 0;
}

// Projects button on and off
function ProBtnon() {
    // body...
    document.getElementById('ProBtn').style.opacity = 1;
}
function ProBtnOff() {
    // body...
    document.getElementById('ProBtn').style.opacity = 0;
}

// Frist Project button on and off
function FProBtnon() {
    // body...
    document.getElementById('FProBtn').style.opacity = 1;
}
function FProBtnOff() {
    // body...
    document.getElementById('FProBtn').style.opacity = 0;
}

// Second Project button on and off
function SProBtnon() {
    // body...
    document.getElementById('SProBtn').style.opacity = 1;
}
function SProBtnOff() {
    // body...
    document.getElementById('SProBtn').style.opacity = 0;
}

// Third Project button on and off
function TProBtnon() {
    // body...
    document.getElementById('TProBtn').style.opacity = 1;
}
function TProBtnOff() {
    // body...
    document.getElementById('TProBtn').style.opacity = 0;
}


// Internship button on and off
function InBtnon() {
    // body...
    document.getElementById('InBtn').style.opacity = 1;
}
function InBtnOff() {
    // body...
    document.getElementById('InBtn').style.opacity = 0;
}


// Certificate button on and off
function CerBtnon() {
    // body...
    document.getElementById('CerBtn').style.opacity = 1;
}
function CerBtnOff() {
    // body...
    document.getElementById('CerBtn').style.opacity = 0;
}


// Co-Circular button on and off
function CoBtnon() {
    // body...
    document.getElementById('CoBtn').style.opacity = 1;
}
function CoBtnOff() {
    // body...
    document.getElementById('CoBtn').style.opacity = 0;
}


// Personal Information button on and off
function PerBtnon() {
    // body...
    document.getElementById('PerBtn').style.opacity = 1;
}
function PerBtnOff() {
    // body...
    document.getElementById('PerBtn').style.opacity = 0;
}
// keyboard shortcuts

window.addEventListener('keydown',(event)=>{
    if (event.key === 'c') {
        COF();
    }
    if (event.key === 'a') {
        Academic();
    }
    if (event.key === 's') {
        Skil();
    }
    if (event.key === 'p') {
        prof();
    }
    if (event.key === 'i') {
        Intern();
    }
    if (event.key === 'o') {
        Certify();
    }
    if (event.key === 'C') {
        Activity();
    }
    if (event.key === 'P') {
        Personal();
    }
});