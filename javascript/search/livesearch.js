function showResult(str) {
  
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="2px solid #A5ACB2";
      document.getElementById("livesearch").style.backgroundColor = "#444549";
    }
  }
  
  console.log('../../actions/products/livesearch.php?q='+str);
  xmlhttp.open("GET", '../../actions/products/livesearch.php?q='+str,true);
  xmlhttp.send();
}