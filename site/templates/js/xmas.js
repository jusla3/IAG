$(function() {
$('#ribbon').hide().fadeIn(2000)});

$(function() {
$('#animated-xmas-header.unmirror div').each(function(i) {
$(this).delay((i++) * 90).fadeTo(1000, 1); })
});

$(function() {
$('#animated-xmas-header.mirror div').each(function(i) {
$(this).delay((i++) * 90).fadeTo(1000, 1); })
});
