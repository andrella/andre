<style>
    .sconto{
    width: 300px;
        display:none;
    }
    .capoverso{
      width:550px;
      height:40px;
      background:lightcoral;
      font-size:25px; 
      color: blue;
      margin-top: 20px;
      border-radius:10px;
        
      padding-left: 10px;
      padding-top: 2px;
    }
   .capoverso:hover{
      background:red;
      font-weight: 700;
      font-size:24px;   
    }
    .articolo{
      font-size:18px !important; 
      padding-top: px !important;  
    }
    a{
      text-decoration: none;
    }
    a:hover{
      text-decoration: none;
      font-weight: 700;
      
      color: aqua;
    }
    .elemento{
      width:500px;
      height: 40px;
      
      background:lightgoldenrodyellow;
      font-size:25px; 
      color: blue;
      border-radius:10px;
      margin-left:10px; 
      margin-top: 10px;
      padding-top: 2px;
      padding-left: 10px;

    }
    .elemento:hover{
      background:yellow;
      font-weight: 700;
    }
    .pannello{
        position: absolute;
        border-radius:10px;
        font-size:15px;
        top: 300px;
        left: 600px;
        width: 600px;
        background: lightgray;
        color: blue;
        padding:  25px;
    }
    .modale{
        display: none;
        position: absolute;
        border-radius:10px;
        font-size:15px;
        top: 320px;
        left: 620px;
        width: 150px;
        background: yellowgreen;
        color: blue;
        padding:  25px;
    }
    .piccolo{
    	font-size:14px !important;
    }
    .liv1{
        margin-left: 10px;
    }
</style>

<div class="capoverso" onclick="conditionedOpening('desc4','cap0')">     
    Materiale riservato
</div>
<div id="desc4" class="sconto pannello">
    <h4 style="background:lightyellow;padding: 5px">Solo operatori  autorizzati.<br></h4>
    <p style="font-size:20px">Inserisci password: <input id="pwd" type="password" style="border: 1px solid black;width:200px"><br>
    <button onclick="checkPwd()">entra</button>
    <button onclick="openElem('desc4')">esci</button></p>   
    <div id="chk" style="font-size:20px">in attesa di inserimento pwd</div>
</div>
<div id="cap0" class="sconto">
    <a href="https://docs.google.com/document/d/16oHeUAvM0-N0CPEctBg3dH3f26RmqEp-9nQ11drD4qE/edit" target="_blank">    
      <div class="articolo elemento">
        Canovaccio sondaggio
      </div>
    </a>    
    <a href="https://docs.google.com/document/d/1u93Uj_Le4wKDTOaOLwmWwWc4z-tnaf9FPbZYKjljeRM/edit" target="_blank">    
       <div class="articolo elemento">
          Canovaccio classemedica - obiettivo ippocrate
       </div>
    </a>   
     <a href="https://docs.google.com/document/d/1n9eOHbankPbUDSb295_2q6eDCK3OmKeB-F79YoT8mXM/edit" target="_blank">    
       <div class="articolo elemento">
          Canovaccio nuovo sito cittadini-medici
       </div>
    </a>
    <a href="https://docs.google.com/document/d/1E0PX5tGeHkgyRZ3E8SekYF0Cr1u_ZUxn/edit" target="_blank">    
       <div class="articolo elemento">
          lettera aperta
       </div>
    </a>
</div>
<div class="capoverso" onclick="openElem('cap1')" >     
Elementi introduttivi
</div>
   
<div id="cap1" class="sconto">
   <div class="elemento" onclick="onOff('desc1')">
   		Finalità
   </div> 
   <div class="elemento" onclick="onOff('desc2')">
        Soci aderenti
   </div>
   <div class="elemento" onclick="onOff('desc3')">
       Modello cooperativo
   </div>
</div>  
<div id="desc1" class="sconto pannello" onclick="openElem('desc1')">
    <h3>Finalità</h3>
    Il coordinamento MG nasce inseguito al proposito di arginare la deriva avvertita da molti medici di medicina generale nell'esercizio della professioni.<br><br>
    <a href="https://docs.google.com/document/d/1lG_7BP0YXfB10BnIQdVvWtPiMGQ26JXQdUEPWETg3Sg/edit" style="border: solid 3px red; border-radius: 5px; color:red">  click qui per maggiori informazioni  </a>
<br><br>
    (click sul pannello per chiudere)
  </div>
  <div id="desc2" class="sconto pannello" onclick="openElem('desc2')">
    <h3>Medici aderenti</h3>
    Prof. dott. Guido Tersilli<br>
    Ill. On. Otelma<br><br>    
   
    (click sul pannello per chiudere)
  </div>
  <div id="desc3" class="sconto pannello" onclick="openElem('desc3')">
    <h3><b>Il modello cooperativo</b></h3>
    L'attuale paradigma operativo presso la medicina generale consiste, nei casi in cui è attuato, nell'adozione di una comunicazione medico paziente secondo logiche proprietarie; molti software gestionali infatti si sono dotati moduli di comunicazione fra medico e paziente fondati sul web; tali moduli consentono una variegata gamma di servizi tra i quali la richiesta dei farmaci, lo scambio di informazioni cliniche, l'invio di documenti ecc.<br><br>
La pur ampia gamma di servizi è tuttavia caratterizzata dalla comune logica di mantenere una comunicazione al centro della quale c'è il medico di famiglia con la sua coorte di pazienti assistiti; questo paradigma esclude dunque qualsiasi forma di cooperazione fra più medici ed esclude anche il coinvolgimento di altre figure professionali diverse dal medico di famiglia. 
.<br><br>
      <a href="https://docs.google.com/document/d/1lG_7BP0YXfB10BnIQdVvWtPiMGQ26JXQdUEPWETg3Sg/edit" style="border: solid 3px red; border-radius: 5px; color:red">  click qui per maggiori informazioni  </a>.<br><br>
    (click sul pannello per chiudere)
    
  </div>
<div class="capoverso"  onclick="openElem('cap3')">
Articoli interessanti
</div> 
<div id="cap3" class="sconto"  >
<a href="https://wsimag.com/it/scienza-e-tecnologia/64652-dopo-un-anno-di-pandemia" target="_blank">    
  <div class="articolo elemento">
    E. Burgio: dopo un anno di pandemia
  </div>
</a>    
<a href="http://www.quotidianosanita.it/lettere-al-direttore/articolo.php?articolo_id=91380&fr=n" target="_blank">    
  <div class="articolo elemento">
    O. Mancin: La favola del miglior SSN del mondo
  </div>
</a>    
<a  href="https://blogs.bmj.com/bmj/2021/01/04/peter-doshi-pfizer-and-modernas-95-effective-vaccines-we-need-more-details-and-the-raw-data/" target="_blank">    
  <div class="articolo elemento piccolo">
    Peter Doshi: Pfizer and Moderna’s “95% effective” vaccines—we need more details and the raw data
  </div>
</a>    
    <a  href="https://www.internazionale.it/reportage/annalisa-camilli/2020/12/17/no-vax-no-mask-europa-chi-sono" target="_blank">    
  <div class="articolo elemento piccolo">
    Internazionale: Chi sono quelli che si oppongono al vaccino per il covid in Europa
  </div>
</a>
</div>

<div class="capoverso"  onclick="openElem('cap4')">
Documentazione scaricabile
</div> 
<div id="cap4" class="sconto"  >
<a href="" target="_blank">    
  <div class="articolo elemento">
    doc 1
  </div>
</a>    
   
</div>

<div class="capoverso"  onclick="openElem('cap5')">
    Siti correlati al covid
    </div> 
    <div id="cap5" class="sconto"  >
    <a href="http://www.salute.gov.it/portale/nuovocoronavirus/homeNuovoCoronavirus.jsp" target="_blank">    
      <div class="articolo elemento">
        Ministero della Salute
      </div>
    </a>    
    <a href="https://www.regione.veneto.it/web/sanita/nuovo-coronavirus" target="_blank">    
      <div class="articolo elemento">
        Regione Veneto
      </div>
    </a>     
</div>

<script>

var elArr=[];
var el="";
var authorized1=false;


function checkPwd() {
    
    var nome = document.getElementById('pwd').value;
    if(nome!=""&&"ornella|francesca|io|medico".includes(nome)){
            authorize();       
        }    
        else{
           messaggio('chk','password errata');
           setTimeout(()=>{messaggio("chk","in attesa di inserimento pwd")},2000); 
        }
}
function messaggio(id,txt) {
    el = document.getElementById(id);   
    el.innerHTML=txt;
}


function conditionedOpening(arg1,arg2) {

    if(!authorized1){
      onOff(arg1);
    }
   
    else{
      onOff(arg2);
    }
   
}

function authorize() {
    authorized1=true;
    messaggio("chk","accesso autorizzato");

    setTimeout(()=>{onOff("desc4");},2000); 
}

function openElem(arg){
    el = document.getElementById(arg);
   
    if(elemType(arg)=="modale"){
        el.style.display = "block";
        return;
    }
    if(arg==currentElem()){
        onOff(arg);
        return;
    }
    /*
    *se click sopra un altro menu principale ==> chiude tutto
    */
    if(comesFromLowerLevel(arg)){
        closeFromElem("");
    }
    /*
    *se pannello aperto e click da altro pannello ==> chiude pannello vecchio
    */
   if (elArr.length>0&&elArr[elArr.length-1].includes("desc")) {
       closeLastElem();
   }
    el.style.display = "block";
    elArr.push(arg);
}

function comesFromLowerLevel(arg) {
    if(elArr.length==0|elemType(arg).includes("pannello"))
        return false;

    for (let i = elArr.length-1; i >= 0; i--) {
        if(elemType(elArr[i])=="sconto"){
            return arg!=elArr[i];
        }
    }
}
function elemType(arg) {
    tipo=document.getElementById(arg).className;
    return tipo;
}

function getLastElem() {
    l = elArr.length-1;
    if (l<0) 
        return "";
    return elArr[l];
}

function closeFromElem(arg) {
    while(elArr.length>0){
      
        if(getLastElem()===arg){
            closeLastElem();
            return;
        }
        closeLastElem();
    }    
}

function closeLastElem() {
    close(getLastElem());
    var l = elArr.length;
    if(l>0)
        elArr.length=l-1;
}

function currentElem() {
    if(elArr.length==0)
        return "";
    return elArr[elArr.length-1];
}
function close(arg) {
    if(arg==="")
        return;
    document.getElementById(arg).style.display="none";
}

function onOff(arg){
  el = document.getElementById(arg);
  
  if (el.style.display=="block") {
    if(elemType(arg)=="modale"){
        close(arg); 
    }
    else{     
      closeFromElem(arg);
    }  
    return;
  }  
  openElem(arg);
}

</script>