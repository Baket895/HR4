@extends('layouts.hr3-admin')

@section('title')
    Employee Training
@endsection

@section('header')
    <h1 class="text-3xl font-bold">Employee Training</h1>
    <h5 class="text-blue-500">Manage and track employee trainings</h5>
@endsection

@section('content')
<div class="bg-background text-primary-foreground min-h-screen p-8">
  <div class="w-full max-w-7xl bg-white shadow-lg rounded-lg mx-auto">
    <div class="p-6">
      <div class="mb-6">
        <label for="employee-select" class="block text-sm font-medium mb-2">Select an employee:</label>
        <select
          class="block w-full bg-input border border-border text-primary py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-primary"
          id="employee-select"
        >
          <option>Select an employee</option>
          <option>John Doe</option>
          <option>Jane Smith</option>
          <option>Mike Johnson</option>
          <option>Emily Brown</option>
        </select>
      </div>

      <div class="mb-6">
        <h2 class="text-2xl font-semibold mb-4">Trainings Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="bg-blue-100 p-4 rounded-lg text-center">
            <h3 class="text-xl font-bold text-blue-700">5</h3>
            <p class="text-sm text-blue-600">Completed Trainings</p>
          </div>
          <div class="bg-green-100 p-4 rounded-lg text-center">
            <h3 class="text-xl font-bold text-green-700">2</h3>
            <p class="text-sm text-green-600">Ongoing Trainings</p>
          </div>
          <div class="bg-yellow-100 p-4 rounded-lg text-center">
            <h3 class="text-xl font-bold text-yellow-700">1</h3>
            <p class="text-sm text-yellow-600">Upcoming Trainings</p>
          </div>
        </div>
      </div>

      <div class="mb-6">
        <h2 class="text-2xl font-semibold mb-4">Training Details</h2>
        <div class="space-y-6">
          @foreach(['Training 1', 'Training 2', 'Training 3'] as $index => $training)
            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
              <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">{{ $training }}</h3>
                <span class="px-3 py-1 text-sm font-semibold text-white rounded-full
                  @if($index === 0) bg-green-500
                  @elseif($index === 1) bg-blue-500
                  @else bg-yellow-500
                  @endif">
                  @if($index === 0) Completed
                  @elseif($index === 1) In Progress
                  @else Upcoming
                  @endif
                </span>
              </div>
              <div class="mb-4">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-gray-700">Progress</span>
                  <span class="text-gray-700">
                    {{ $index === 0 ? '100' : ($index === 1 ? '60' : ' 20') }}%
                  </span>
                </div>
                <div class="w-full bg-gray-200 h-2 rounded-lg overflow-hidden">
                  <div class="bg-yellow-500 h-2 rounded-lg
                    @if($index === 0) w-full
                    @elseif($index === 1) w-3/5
                    @else w-1/5
                    @endif">
                  </div>
                </div>
              </div>
              <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection