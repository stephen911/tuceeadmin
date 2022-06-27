// $(document).ready(function(){
// $(".all").hide();
// });


const el = document.getElementById('custom-select87');

// const all = document.getElementsByClassName('all');
const east = document.getElementById('east');
// const tertiary = document.getElementById('tertiary2');
const specify = document.getElementById('specify');

el.addEventListener('change', function handleChange(event) {
  // if (event.target.value == 'none') {
  //   all.style.display = 'none';
  // } else {
  //   all.style.display = 'block';
  // }
//   if (event.target.value == 'adenta') {
//     shs.style.display = 'block';
//   } else {
//     shs.style.display = 'none';
//   }
  if (event.target.value == 'Ga - East Municipality') {
    east.style.display = 'block';
  } else {
    east.style.display = 'none';
  }
  if (event.target.value == 'other') {
    specify.style.display = 'block';
  } else {
    specify.style.display = 'none';
  }
});



