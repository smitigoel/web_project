
function reg_validate()
	{
	var user=document.register.username.value;
	var email=document.register.email.value;
	var password1=document.register.password1.value;
	var password2=document.register.password2.value;
	var atposition=email.indexOf("@");
	var dotpos=email.indexOf(".");
	if(user=="")
	{
		alert("Enter a valid username");
		return false;
	}
	if(atposition<1 ||dotpos<atposition+2 ||dotpos+2>email.length)
	{
		alert("Enter a valid email address");
		return false;
	}
	if(password1!=password2)
	{
		alert("Password doesn't match.");
		return false;
	}
	if(password1<8)
	{
		alert("Length of the passwordshould be atleast  character long.")
		return false;
	}
	
}
function sign_validate()
{
	
}
function makeEditable(div)
{

		div.style.border="1px solid black";
		div.style.padding="5px";
		div.contentEditable=true;
}
function makeReadOnly(div){
	div.style.border="none";
	div.style.padding="0px";
	div.contentEditable=false;
	alert("Save the file after Editing");
}
function imgEditable(img)
{
	imgurl=prompt("Enter the Path of the file","image/file.png");
	img.src=imgurl;
}