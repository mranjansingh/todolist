  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('assets1/assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets1/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <style type="text/css">
    .navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand img{
      height:50px !important;
    }
      .navbar .navbar-brand-wrapper {
        background-color: white !important;
      }
      .navbar-breadcrumb{
       background-color:#182a55;
      }
      .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-prepend{
        background-color:#5cb9b5;
      }
      .navbar{
        border-bottom: 4px solid #5cb9b5;
      }
      #imgname{
        margin-left: 70px;
        font-size:20px;
      }
  </style>
<style>
  tbody, td, tfoot, th, thead, tr {
    border-width: 8px !important;
  }
.text-wrap{
white-space: normal !important;
width:0;
  }
  .table>tbody{

    vertical-align: baseline !important;
  }
.table>thead {
     vertical-align: baseline !important;
    background: #182a55;
    color: white;
}
.table th, .table td {
    border: 10px solid #e9ecef !important;
    vertical-align: center !important;
}
/*rgb(147 208 209);*/
.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-toggler {
  color:#182a55;
}
.btn-primary{
    color: #fff;
    background-color: #5cb9b5;
    border-color: #5cb9b5;
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #182a55;
    border-color: #182a55;
  }
  .btn-pending{
    color: #fff;
    background-color: #0c54ff;
    border-color: #0f54f7;
  }  
  .btn-pending:hover{
    color: #fff;
    background-color: #0440cd;
    border-color: #0440cd;
  }
  .bg-white1{
    background-color:#5cb9b5;
    color: white;
  }
  .statusheading{
    color: #182a55;
    font-size:16px;
    font-weight:500;
    border-bottom:2px solid #182a55;
      }


.container-calendar {
    background: #ffffff;
    padding: 15px;
    margin: 0 auto;
    overflow: auto;
        width: 100%;
    height: 100%;
}

.button-container-calendar button {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #00a2b7;
    color: #fff;
    border: 1px solid #0aa2b5;
    border-radius: 4px;
    padding: 5px 10px;
}

.table-calendar {
    border-collapse: collapse;
    width: 100%;
}

.table-calendar td, .table-calendar th {
    padding: 5px;
    border: 1px solid #e2e2e2;
    text-align: center;
    vertical-align: top;
}

.date-picker.selected {
    font-weight: bold;
        font-weight: bold;
    outline: 2px dashed #4db2af;
    background: #4db2af;
    color: white;
}

.date-picker.selected span {
    border-bottom: 2px solid currentColor;
}

/* sunday */
.date-picker:nth-child(1) {
  color: red;
}

/* friday */
.date-picker:nth-child(6) {
  color: green;
}

#monthAndYear {
    text-align: center;
    margin-top: 0;
}
.table-calendar{
border-color: #2d3d64;
}
.button-container-calendar {
    position: relative;
    margin-bottom: 1em;
    overflow: hidden;
    clear: both;
}

#previous {
    float: left;
}

#next {
    float: right;
}

.footer-container-calendar {
    margin-top: 1em;
    border-top: 1px solid #dadada;
    padding: 10px 0;
}

.footer-container-calendar select {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #ffffff;
    color: #585858;
    border: 1px solid #bfc5c5;
    border-radius: 3px;
    padding: 5px 1em;
}     
.table-calendar td, .table-calendar th {
    padding: 12px;
    border: 1px solid #ebedf2;
    text-align: center;
    vertical-align: top;
} 
.sidebar {
    background:#5cb9b5;
}
</style>