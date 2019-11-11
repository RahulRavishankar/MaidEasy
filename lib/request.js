/*$(document).ready(function(){
    alert('Ready');
}); */
var Request="<p>This is a new request</p>";
var newRequest="<div class='requests'> <p>House no.<?=$houseno?><br> for <?=$worktype?><br> from <?=$time?><br></p></div>";
newRequest="<div class='requests'> <p>House no.555<br> for Washing<br> from 9-10<br></p></div>";

$('.sub').click(function(){
    $('.existing-requests').append(newRequest);
    
});