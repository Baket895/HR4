@extends('layouts.hr3-admin')

@section('title')
    Dashboard
@endsection

@section('header')
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <h5 class="text-blue-500">Dashboard</h5>
@endsection

@section('content')

<div class="bg-background text-primary-foreground min-h-screen p-8">
    <h1 class="text-3xl font-bold mb-4">Compensation Planning and Administration</h1>
    <div class="bg-card rounded-lg p-4 mb-4">
      <h2 class="text-xl font-semibold mb-2">Positions</h2>
      <ul>
        <li class="flex items-center justify-between py-2 border-b border-border">
          <span>Position Name</span>
          <span>Department</span>
        </li>
      </ul>
    </div>
  
    <div class="bg-card rounded-lg p-4 mb-4">
      <h2 class="text-xl font-semibold mb-2">Qualifications</h2>
      <ul>
        <li class="flex items-center justify-between py-2 border-b border-border">
          <span>Position Name</span>
          <span>Qualifications</span>
        </li>
      </ul>
    </div>
  
    <div class="bg-card rounded-lg p-4 mb-4">
      <h2 class="text-xl font-semibold mb-2">Total Amount of Salary</h2>
      <ul>
        <li class="flex items-center justify-between py-2 border-b border-border">
          <span>Position Name</span>
          <span>Total Salary</span>
        </li>
      </ul>
    </div>
  
    <div class="bg-card rounded-lg p-4">
      <h2 class="text-xl font-semibold mb-2">Tracking File</h2>
      <div class="flex items-center justify-between py-2 border-b border-border">
        <span>File Name</span>
        <a href="#" class="text-primary hover:underline">Download</a>
      </div>
    </div>
  </div>

@endsection
