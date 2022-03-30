<style>
/* The Modal (background) */
.modal {
    right: 0px;
     display: none; 
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: -14px;
    margin: auto;
    top: 75px;
    z-index: 9999;
    width: 28%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: transparent;
}
/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    text-align: center;
    width: 65%;
    border-radius: 5px;
    -webkit-box-shadow: -1px 1px 15px 0px rgba(0,0,0,0.39);
    -moz-box-shadow: -1px 1px 15px 0px rgba(0,0,0,0.39);
    box-shadow: -1px 1px 15px 0px rgba(0,0,0,0.39);
}

/* The Close Button */
.close {
    font-weight: lighter !important;
    color: white;
    float: inherit;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: bold;
    background-color: #aaaaaa;
    padding: 8px 40px;
}
.modal-content p {
    margin: inherit;
    color: #9E9E9E;
    padding: 13px 10px;
    padding: 6px 10px 13px;
    font-family: 'nunito_sansregular';
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-content h6 {
    font-size: 16px;
    margin: 0px;
    font-family: 'nunito_sansregular';
}
</style>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <h6><b>Alert!</b></h6>
    <p>You didn't write anything in the field</p>
    <span class="close">Ok</span>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
