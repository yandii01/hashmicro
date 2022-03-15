@extends('layouts.main') 
@section('css') 
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
@endsection 
@section('body')
<div class="container-fluid general-widget">
    <div class="row mt-2">
      <div class="col-xl-12 box-col-12">
        <div class="card testimonial text-center">
          <div class="card-body">
            <div>
                Input 1: <input type="text" id="str1" size="20" name="fname"><br>
                Input 2: <input type="text" id="str2" size="20" name="age"><br>
                <p id="did"></p>
                <button class="btn btn-sm btn-primary" onclick="myFunction()">Click Here</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h7>Nested Loop<h7> <br>
  <h7>input angka : <h7><br><input type="number" id="inputloop" style="width:200px">
  <button class="btn btn-sm btn-primary" onclick="myFunction1()">Click Here</button>
  <p id="loop"></p>
  <br>

  <h7>Nested If<h7> <br>
  <h7>input umur : <h7><br><input type="number" id="inputif" style="width:200px">
  <button class="btn btn-sm btn-primary" onclick="myFunction2()">Click Here</button>
  <p id="if"></p>
  <br>

  <h7>Mathematics <br>
  <h7>input 1 : <h7><br><input type="number" id="input1" style="width:200px"><br>
  <h7>input 2 : <h7> <br><input type="number" id="input2" style="width:200px"><br>
  <button class="btn btn-sm btn-primary" onclick="tambah()"> + </button>
  <button class="btn btn-sm btn-primary" onclick="kurang()"> - </button>
  <button class="btn btn-sm btn-primary" onclick="kali()"> X </button>
  <button class="btn btn-sm btn-primary" onclick="bagi()"> / </button>
  <p id="hasil"></p>
@endsection 
@section('script') 
    <!-- Plugins JS start-->
    <script src="/assets/js/prism/prism.min.js"></script>
    <script src="/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/js/counter/counter-custom.js"></script>
    <script src="/assets/js/custom-card/custom-card.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/general-widget.js"></script>
    <script src="/assets/js/height-equal.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    {{-- <script src="/assets/js/theme-customizer/customizer.js"></script>--}}
    <script>
    function myFunction() {
    var str1 = document.getElementById("str1").value;
    var str2 = document.getElementById("str2").value;

    var str1 = str1.toLowerCase();
    var str2 = str2.toLowerCase();
    var c = 0;

    console.log(str2);
    
        // Traverse the string 1 char by char
        for (var i = 0; i < str1.length; i++) {
    
            // This will check if str1[i]
            // is present in str2 or not
            // str2.find(str1[i]) returns -1 if not found
            // otherwise it returns the starting occurrence
            // index of that character in str2
            if (str2.includes(str1[i]))
                c += 1;
        }
        c = c / str1.length * 100;
        document.getElementById("did").innerHTML = c +'%';
    }

</script>

<script>
    function myFunction1() {
    let n = document.getElementById("inputloop").value;
    let alp="" //empty string
    for(let i=1;i<=n;i++){
        for(let j=1;j<=i;j++)
        {
            alp+="*"; //pass any string to print 
        }
        alp+="<br>";//new line for each row
    }
    console.log(alp);
    document.getElementById("loop").innerHTML = alp;
    }
</script>

<script>
    function myFunction2(){
        var age = document.getElementById("inputif").value;
        if( age < 18 )
        {
            document.getElementById("if").innerHTML = "Terlalu muda <br> Tidak cocok bekerja."; 
        }
        else
        {
            if (age >= 18 && age <= 60 )
            {
                document.getElementById("if").innerHTML = "Kamu memenuhi syarat untuk bekerja.";
            }
            else
            {
                document.getElementById("if").innerHTML = "kamu terlalu tua untuk bekerja";
            }
        }
    }
</script>
<script>
    function tambah(){
        var input1 = parseFloat(document.getElementById("input1").value);
        var input2 = parseFloat(document.getElementById("input2").value);
        var hasil = 0;

        hasil = input1 + input2;
        document.getElementById("hasil").innerHTML = hasil;
    }
</script>
<script>
    function kurang(){
        var input1 = parseFloat(document.getElementById("input1").value);
        var input2 = parseFloat(document.getElementById("input2").value);
        var hasil = 0;

        hasil = input1 - input2;
        document.getElementById("hasil").innerHTML = hasil;
    }
</script>
<script>
    function kali(){
        var input1 = parseFloat(document.getElementById("input1").value);
        var input2 = parseFloat(document.getElementById("input2").value);
        var hasil = 0;

        hasil = input1 * input2;
        document.getElementById("hasil").innerHTML = hasil;
    }
</script>
<script>
    function bagi(){
        var input1 = parseFloat(document.getElementById("input1").value);
        var input2 = parseFloat(document.getElementById("input2").value);
        var hasil = 0;

        hasil = input1 / input2;
        document.getElementById("hasil").innerHTML = hasil;
    }
</script>
@endsection