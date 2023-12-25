  <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <i class="fa fa-search" style="background:grey; padding: 10px 10px;"></i>
<input type="text" id="myinput" onkeyup="myfunction()" placeholder="search..." style="height: 40px;">
 <script>
   let sidebar = document.queryselector(".sidebar");
let sidebarbtn = document.queryselector(".sidebarbtn");
sidebarbtn.onclick = function() {
  sidebar.classlist.toggle("active");
  if(sidebar.classlist.contains("active")){
  sidebarbtn.classlist.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarbtn.classlist.replace("bx-menu-alt-right", "bx-menu");
}
function myfunction() {
  var input, filter, table, tr, td, i, txtvalue;
  input = document.getelementbyid("myinput");
  filter = input.value.touppercase();
  table = document.getelementbyid("mytable");
  tr = table.getelementsbytagname("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getelementsbytagname("td")[1];
    if (td) {
      txtvalue = td.textcontent || td.innertext;
      if (txtvalue.touppercase().indexof(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
 </script> 