@extends('layouts.hr3-admin')

@section('title')
    Employee Training
@endsection

@section('header')
    <h1 class="text-3xl font-bold">Employee Training</h1>
    <h5 class="text-blue-500">Track employee trainings</h5>
@endsection

@section('content')
<div class="bg-background text-primary-foreground min-h-screen flex flex-col items-center justify-center">
  <h1 class="text-primary text-center text-3xl font-bold mb-8">Employee Dashboard</h1>
  <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 w-full max-w-6xl">
    <div class="bg-card shadow-lg rounded-lg p-6 flex flex-col items-center">
      <img aria-hidden="true" alt="employee-profile" src="https://openui.fly.dev/openui/300x200.svg?text=Employee Profile" class="w-24 h-24 mb-4" />
      <h2 class="text-lg font-semibold mb-2">Employee Profile Editor</h2>
      <p class="text-sm text-muted-foreground text-center">Edit and manage employee profiles with ease.</p>
    </div>

    <div class="bg-card shadow-lg rounded-lg p-6 flex flex-col items-center">
      <img aria-hidden="true" alt="organizational-chart" src="https://openui.fly.dev/openui/300x200.svg?text=Organizational Chart" class="w-24 h-24 mb-4" />
      <h2 class="text-lg font-semibold mb-2">Organizational Chart Viewer</h2>
      <p class="text-sm text-muted-foreground text-center">Visualize and explore your organization's structure.</p>
    </div>

    <div class="bg-card shadow-lg rounded-lg p-6 flex flex-col items-center">
      <img aria-hidden="true" alt="performance-evaluation" src="https://openui.fly.dev/openui/300x200.svg?text=Performance Evaluation" class="w-24 h-24 mb-4" />
      <h2 class="text-lg font-semibold mb-2">Performance Evaluation Workflow</h2>
      <p class="text-sm text-muted-foreground text-center">Streamline performance evaluation processes.</p>
    </div>
    <div class="bg-card shadow-lg rounded-lg p-6 flex flex-col items-center">
      <img aria-hidden="true" alt="employee-files" src="https://openui.fly.dev/openui/300x200.svg?text=Employee Files" class="w-24 h-24 mb-4" />
      <h2 class="text-lg font-semibold mb-2">Employee Files Management</h2>
      <p class="text-sm text-muted-foreground text-center">View and manage files for all employees.</p>
    </div>
  </div>
</div>


@endsection