let date = new Date();
let day = date.getHours();
let m = new Date();
let minute = m.getMinutes();


if (day <= 11) {
    // document.write('<center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Sun_icon.svg/1020px-Sun_icon.svg.png" width="50px"></center> <br>');
    document.write('<center> Dzień dobry! </center>');


} else if (day < 18) {
    // document.write('<center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Sun_orange_icon.svg/1200px-Sun_orange_icon.svg.png" width="50px"></center> <br>');    
    document.write('<center> Miłego popułudnia! </center> ');

} else if (day == 21 && minute == 37) {
    // document.write('<center><img src="img/baner/papaj.gif" width=100px></center> <br>');
    document.write('<center> Habemus papa! 21:37 🎉 </center>');

} else if (day == 21 && minute == 15) {
    // document.write('<center><img src="https://www.popkiller.pl/sites/default/files/images/bedoes_0.jpg" width=100px></center> <br>');
    document.write('<center> 2115 geng sbm maffija zabija</center>');


} else {

    // document.write('<center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/OOjs_UI_icon_moon.svg/1200px-OOjs_UI_icon_moon.svg.png" width="50px"></center> <br>');    
    document.write('<center> Dobry wieczór! <center> ');

}