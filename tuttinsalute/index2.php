<style>
    .sconto{
        width: 300px;
        display:none;
    }
    .capoverso{
      width:550px;
      height:40px;
      background:royalblue;
      font-size:25px; 
      color: lightcyan;
      margin-top: 20px;
      border-radius:10px;
        
      padding-left: 10px;
      padding-top: 2px;
    }
   .capoverso:hover{
      background: dodgerblue; 
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
      font-size:25px; 
      color: lightcyan;
      border-radius:10px;
      margin-left: -80px;
      margin-top: 20px;
      padding-top: 2px;
      padding-left: 10px;
      background: royalblue;  
    }
    .elemento:hover{
        background: dodgerblue;
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
        position: fixed;
        top: 100px;
        left: 250px;
        border-radius:10px;
        font-size:15px;
        width: 1000px;
        background: lightgray;
        color: blue;
        padding:  25px;
    }
    .piccolo{
    	font-size:14px !important;
    }
    .liv1{
        margin-left: 10px;
    }
    .pannelloGrande{
        width:1000px;
        font-size:20px; 
        color: darkblue;
        display: block;
        border-radius:10px;
        margin: 50px auto;
        padding: 10px 50px 50px 50px;
        background: cornsilk;
    }
    .titolo{
        display: inline-block;
        padding: 10px;
        font-size:35px; 
        color: darkblue;
        margin:30px;
        border-radius:10px;
        background: cyan;
    }
    .indent{
        text-indent: 30px;
        margin: 10px 30px;
        line-height: 30px;
    }

    span{
        display:block;
        text-indent:30px;
        margin: 20px 0px;
    }
   
    .parent{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bottone{
        display: inline-block;
        padding: 10px;
        font-size:35px; 
        margin:30px;
        border-radius:10px;
        background: cyan;
        text-indent: 0px;
    }
  
</style>


<div class="pannelloGrande">

    <div class="parent">
        <div class="titolo">Benvenuta/o</div>
    </div>
  
    <span>Cara/o collega,<span>
    <div id="intro">    
        <span>se sei arrivata/o in questa pagina molto probabilmente significa che anche tu avverti un grande senso di disagio nel tuo lavoro 
        quotidiano; le cause sono molteplici e le possibili misure per attenuarlo sono molto difficili da progettare e ancor di più da attuare
        stanti la grande frammentazione della nostra categoria, le scarsissime risorse che possiamo impiegare per organizzare un'azione incisiva e 
        coordinata e la conseguente dispersione di idee e progetti.</span>
        <span>
        Alcuni di noi sono rassegnati, altri invocano lo sciopero totale, il blocco delle ricette, la revisione dell'ACN e ogni altra forma di 
        protesta naif o concreta che sia.<br>
        </span>
        
        <span>
        Nel tentativo di porre un limite al disagio della categoria e di trovare un denominatore comune aggregante, un gruppetto di colleghi
        ha deciso dunque di proporre delle iniziative volte a strutturare una azione coordinata; prima iniziativa che esso intende promuovere, è 
        la pubblicazione di una lettera aperta a vari organi di informazione, tanto su web quanto su carta stampata.
        </span>
        <span>
        Ti proponiamo pertanto un testo la cui efficacia è presumibile sia proporzionale al numero di sottoscrittori; se vorrai unirti alla lista
        di questi ne saremo onorati e ancor di più sarebbe apprezzato un tuo coinvolgimento nell'organizzazione delle future iniziative.
        </span>
        <span>
        Ti ringraziamo comunque per l'attenzione e ti auguriamo un buon lavoro.
        </span>
        <span>
            <br>Il gruppo promotore.
        </span>
    </div>
    <div id="breveIntro" class="sconto">
        [...]
    </div>
    <div class="bottone" onclick="bottoneIntro(this,'intro','breveIntro')">chiudi intro</div>    
</div>

<div class="pannelloGrande">
    <div class="parent">
        <div class="titolo">
            argomenti principali
        </div>
    </div>
    <div class="parent">
        <div class="capoverso"  onclick="openElem('capA')">
            lettera aperta
        </div> 
    </div>
    <div class="parent">    
        <div id="capA" class="sconto"  >
            <a href="http://www.quotidianosanita.it/lettere-al-direttore/articolo.php?articolo_id=93921" target="_blank">    
                <div class="articolo elemento">
                    lettera pubblicata
                </div>
            </a>    
            <a href="https://www.tuttinsalute.org/doc/FIRMATARI DELLA LETTERA.pdf" target="_blank">  
                <div class="articolo elemento">
                    firmatari
                </div>
            </a>    
            <!--a href="https://docs.google.com/forms/d/e/1FAIpQLSfGuBGY6KGgWCCMwAiMfeCsL0QX-s3hjAn4F_Gky-_kMAXSOg/viewform?usp=sf_link" target="_blank"-->    
                <div class="articolo elemento" onclick="onOff('sospeso')">
                    sottoscrivi la lettera
                </div>
            <!--/a-->             
        </div>
    </div>    
    <div class="modale sconto" id="sospeso">
        <center>Sottoscrizione temporaneamente sospesa<br><br>
        <button onclick="onOff('sospeso')">prosegui</button></p></center>      
    </div>
    <div class="parent">    
        <div class="capoverso" onclick="conditionedOpening(this,'login','areaRiservata')">    
            Area riservata (richiesta pwd)
        </div>
    </div>
    <div class="parent">
        <div id="login" class="sconto modale">
            <h4 style="background:lightyellow;padding: 5px; text-align:center;font-size: 25px">Solo operatori  autorizzati.<br></h4>
            <p style="font-size:20px">Inserisci password: <input id="pwd" type="password" style="border: 1px solid black;width:200px"><br>
            <button onclick="checkPwd('login')">entra</button>
            <button onclick="onOff('login')">esci</button></p>   
            <div id="chk" style="font-size:20px">in attesa di inserimento pwd</div>
        </div>
    </div>
    <div class="parent">    
        <div id="areaRiservata" class="sconto">
            <a href="https://docs.google.com/spreadsheets/d/1weD4RWetdvmyBFMlg_7rbnaBlfoLNcdB/edit#gid=691541484" target="_blank">    
                <div class="articolo elemento">
                    edit sottoscrittori
                </div>
            </a>   
            <a href="https://docs.google.com/forms/d/1fddp0BLE30WlcSG9dfs7ePuPjWIwH6BAN-PBjbtm0L0/edit#responses" target="_blank">    
                <div class="articolo elemento">
                    risposte sondaggio
                </div>
            </a>

        </div>
    </div>
</div>

<script>

var elArr=[];
var el="";
var authorized=false;
var modale="off"
var elNonAuth;

function bottoneIntro(arg,sezChiudi,sezApri){
    if(arg.textContent==="chiudi intro"){
        arg.innerHTML="apri intro";
        onOff(sezChiudi)
        onOff(sezApri);
        return;
    }
    arg.innerHTML="chiudi intro";
    onOff(sezApri);
    onOff(sezChiudi)
    
}

function checkPwd(el) {
    
    var nome = document.getElementById('pwd').value;
    if(nome!=""&&"io|tizzi".includes(nome)){
            authorize(el);       
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


function conditionedOpening(el,arg1,arg2) {
    elNonAuth=el;
    if(!authorized){
        onOff(arg1);
        return;
    }
    onOff(arg2);
}

function stringBetweenChars(txt,ini,fine){
    return txt.substring(txt.lastIndexOf(ini) + 1, txt.lastIndexOf(fine));
}

function authorize(elId) {
    authorized=true;
    x=elNonAuth.textContent;
    x1=stringBetweenChars(x,"(",")");
    elNonAuth.innerHTML=x.replace(x1,"accesso consentito");
    messaggio("chk","accesso autorizzato");
    setTimeout(()=>{onOff(elId);},2000); 
}

function openElem(arg){
    el = document.getElementById(arg);
   
    if(elemType(arg).includes("modale")){
        disp=el.style.display;
        if(modale==="off"){
            elArr.push(arg);
            el.style.display = "block";
            modale = "on";
        }    
        else{
            el.style.display = "none";
            modale = "off";
        }    
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
    modale="off";
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
    if(elArr.findIndex((e)=>(e==arg))<0){
        close(arg);
        return;
    };
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
  prop = getComputedStyle(el).display;
  if (prop=="block") {
    if(elemType(arg).includes("modale")){
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

 <!--div class="parent">
        <div class="capoverso" onclick="openElem('capC')">
            altro
        </div> 
    </div>
    <div class="parent">    
        <div id="capC" class="sconto"  >
               
            <div class="articolo elemento" onclick="openElem('firmatari')">
                chi siamo
                <div id="firmatari" class="sconto modale" onclick="onOff('firmatari')">
                    <h3>Hanno contribuito alla stesura della lettera:</h3>
                    Ornella Mancin, Venezia;<br>
                    Francesca Moggi, Reggio Emilia;<br>
                    Tiziana Alescio, Palermo;<br>
                    Laura Viotto, Roma;<br>
                    Anna Antonucci, Napoli
                    <br><br>
                    (click sul pannello per chiudere)
                </div>
            </div>           
        </div>
    </div-->  

    <!--div class="parent">
        <div class="capoverso"  onclick="openElem('capB')">
            comitato promotore
        </div> 
    </div-->