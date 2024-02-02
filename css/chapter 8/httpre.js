var xhr = new XMLHttpRequest();
xhr.open('GET','http://www.example.com',true);
xhr.onload = function(){
    if(xhr.status===200){
        console.loh(xhr.responseText);
    }else{
        console.log('request failed. Returned status of '+ xhr.status);
    }
};
xhr.send();