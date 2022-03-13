@extends('layouts.layout')
@section('content')
<title>Dashboard</title>
<div >
     @if (Auth::user()->role=='bukan_pj')
  
 
    @endif
</div>
</div>
<div class="row"> 
  <div class="col-xl-6 col-md-12 mb-4">
   <div class="card border-left-danger shadow h-100 py-2">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <div class="col mr-2">
           <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Barang Butuh Perbaikan</div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
         </div>
         <div class="col-auto">
           <i class="fas fa-calendar fa-2x text-gray-300"></i>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="col-xl-6 col-md-12 mb-4">
   <div class="card border-left-success shadow h-100 py-2">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <div class="col mr-2">
           <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Perbaikan</div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
         </div>
         <div class="col-auto">
           <i class="fas fa-calendar fa-2x text-gray-300"></i>
         </div>
       </div>
     </div>
   </div>
 </div>

   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Barang Inventaris</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Tanah</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Bangunan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

   
<div class="card shadow mb-4">

@endsection