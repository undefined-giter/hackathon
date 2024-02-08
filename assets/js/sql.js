"use strict"; 

let text1 = '<a href="https://fr.wikipedia.org/wiki/Structured_Query_Language">Cours SQL</a>';
let text2 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text3 = '<a href="https://sql.sh/cours/update">Cours SQL</a>';
let text4 = '<a href="https://sql.sh/cours/delete">Cours SQL</a>';
let text5 = '<a href="https://sql.sh/cours/insert">Cours SQL</a>';
let text6 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text7 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text8 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text9 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text10 = '<a href="https://sql.sh/cours/where/and-or">Cours SQL</a>';
let text11 = '<a href="https://sql.sh/cours/where/and-or">Cours SQL</a>';
let text12 = '<a href="https://sql.sh/cours/where">Cours SQL</a>';
let text13 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text14 = '<a href="https://sql.sh/cours/order-by">Cours SQL</a>';
let text15 = '<a href="https://sql.sh/cours/order-by">Cours SQL</a>';
let text16 = '<a href="https://sql.sh/cours/insert-into">Cours SQL</a>';
let text17 = '<a href="https://sql.sh/cours/insert-into">Cours SQL</a>';
let text18 = '<a href="https://sql.sh/cours/update">Cours SQL</a>';
let text19 = '<a href="https://sql.sh/cours/delete">Cours SQL</a>';
let text20 = '<a href="https://sql.sh/cours/select">Cours SQL</a>';
let text21 = '<a href="https://sql.sh/cours/jointures/inner-join">Cours SQL</a>';
let text22 = '<a href="https://sql.sh/cours/">Cours SQL</a>';
let text23 = '<a href="https://sql.sh/cours/">Cours SQL</a>';
let text24 = '<a href="https://sql.sh/cours/">Cours SQL</a>';
let text25 = '<a href="https://sql.sh/cours/create-database">Cours SQL</a>';
let text26 = '<a href="https://fr.wikipedia.org/wiki/Structured_Query_Language">Cours SQL</a>';
let text27 = '<a href="https://sql.sh/cours/update">Cours SQL</a>';
let text28 = '<a href="https://sql.sh/fonctions/agregation">Cours SQL</a>';
let text29 = '<a href="https://sql.sh/cours/truncate-table">Cours SQL</a>';
let text30 = '<a href="https://sql.sh/cours/">Cours SQL</a>';


let currentText  = [text1,text2,text3,text4,text5,text6,text7,text8,text9,text10,text11,text12,text13,text14,text15,text16,text17,text17,text18,text19,text20,text21,text22,text23,text24,text25,text26,text27,text28,text29,text30,];


    let n = 0;
    let x = 0;
    let count=0;
    let correction = "";
    
    let numberQuestion = document.getElementsByName('choix'+n);
   
    
    let b1=document.getElementsByName('q'+x);

    let b2=document.getElementsByName('q');
    
    let score1 = 0;





function test(f) {
    const values3 = [];
    while(x < b2.length) {

        let values2= "";
        let values = [];
        let rep;
        let t1=document.getElementsByName('choix'+n);

        let t2= t1.length;
        let b1=document.getElementsByClassName('q');
        let d1=document.getElementsByClassName('q'+n);

        



    for (let i=0; i<t2; i++) { 
        let c1 =document.getElementById(n+"l"+i)
        
        if (t1[i].value==1 && t1[i].checked==false) {


                       c1.style.cssText="color:red;"
                       rep = false;
        }   else if (t1[i].value==0 && t1[i].checked==true) {
                    c1.style.cssText="color:red;"
                    rep = false;
            }   else {

                 c1.style.cssText="color:green;"
                 rep = true;   
                } 

        if (rep == true) {


            correction = 1;
            
      
        }   else {

                correction = 0;

            }

        if (correction == 1) {
        values.push('1');


        } else { 
        values.push('0');

        }

        
        
    } 


    for (let i=0; i<= values.length; i++) { 

        if (values[i] == 0){
            values2=0
        } 
    }

    
    if (values2 === 0 ) {
        let newlabel = document.createElement("label");
        
           
        b1[x].appendChild(newlabel);
        newlabel.innerHTML = currentText[x];
        values3.push('0');
    } else {
        values3.push('1')
        
    }

 
    n++;
   

   x++;

    }

    
for(let i = 0 ; i < values3.length ; i++ )
    if (values3[i] == 1){
     score1 += 1
    
}
let doc = document.getElementById("scoreX");

doc.classList.toggle("scoreX");
document.getElementById("total").innerHTML=values3.length;
document.getElementById("sum").innerHTML=score1;
//

document.getElementById("earned_SQL").value = score1;
document.getElementById("max_SQL").value = values3.length;

document.querySelector('#submit').style.display = 'none'
document.querySelector("#result").style.display = 'block'


if (score1 > 1) {

    let doc2 = document.getElementById("confet");

    doc2.classList.add("confet2");





}





}
