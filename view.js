function expand(id) {

   var fade = document.getElementById('fade' + id),
       light = document.getElementById('light' + id);

   fade.style.display = 'block';
   fade.style.opacity = '0';
   var fadein = setInterval(function () {
      fade.style.opacity = (parseFloat(fade.style.opacity) + 0.1).toString();
      if(parseFloat(fade.style.opacity) > 0.8) {
         fade.style.opacity = '0.8';
         clearInterval(fadein);
         light.style.display = 'block';
         expand_two(id);
      }
   }, 20);
}

function expand_two(id) {

   var fade = document.getElementById('fade' + id),
       light = document.getElementById('light' + id);

   light.style.height = '1%';
   light.style.width = '1%';
   light.style.top = '49.5%';
   light.style.left = '49.5%';
   var e = setInterval(function() {
      light.style.height = (parseFloat(light.style.height) + 1) + '%';
      light.style.width = (parseFloat(light.style.width) + 1) + '%';
      light.style.top = ((100 - parseFloat(light.style.height)) / 2) + '%';
      light.style.left = ((100 - parseFloat(light.style.width)) / 2) + '%';
      if(parseFloat(light.style.height) >= 50) {
         clearInterval(e);
         light.style.height = '50%';
         light.style.width = '50%';
      }
   }, 1);
}

function contract(id) {

   var fade = document.getElementById('fade' + id),
       light = document.getElementById('light' + id);

   light.style.height = '50%';
   light.style.width = '50%';
   var c = setInterval(function() {
      light.style.height = (parseFloat(light.style.height) - 1) + '%';
      light.style.width = (parseFloat(light.style.width) - 1) + '%';
      light.style.top = ((100 - parseFloat(light.style.height)) / 2) + '%';
      light.style.left = ((100 - parseFloat(light.style.width)) / 2) + '%';
      if(parseFloat(light.style.height) <= 1) {
         clearInterval(c);
         light.style.height = '1%';
         light.style.width = '1%';
         light.style.display = 'none';
         contract_two(id);
      }
   }, 1);
}

function contract_two(id) {

   var fade = document.getElementById('fade' + id),
       light = document.getElementById('light' + id);

   fade.style.opacity = '0.8';
   var fadeout = setInterval(function () {
      fade.style.opacity = (parseFloat(fade.style.opacity) - 0.05).toString();
      if(parseFloat(fade.style.opacity) < 0.1) {
         clearInterval(fadeout);
         fade.style.opacity = '0';
         fade.style.display = 'none';
      }
   }, 10);
}