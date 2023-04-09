function BlockChangePassword(){
    document.getElementById('ChangePassword').style.display='block';
    document.getElementById('ChangeInformation').style.display='none';
    document.getElementById('Information').style.display='none';
}
function BlockChangeInformation(){
    document.getElementById('ChangePassword').style.display='none';
    document.getElementById('ChangeInformation').style.display='block';
    document.getElementById('Information').style.display='none';
    
}
function BlockInformation(){
    document.getElementById('Information').style.display='block';
    document.getElementById('ChangePassword').style.display='none';
    document.getElementById('ChangeInformation').style.display='none';
}