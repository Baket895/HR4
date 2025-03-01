@extends('layouts.hr3-admin')

@section('title', 'Analytics')

@section('header')
    <h1 class="text-3xl font-bold">Analytics</h1>
    <h5 class="text-blue-500">Analytics</h5>
@endsection

@section('content')

<div class="bg-white text-foreground p-6">
  <h1 class="text-2xl font-bold mb-4">Recruitment Dashboard</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    
    <div class="bg-card p-4 rounded-lg shadow-md">
      <h2 class="text-lg font-semibold">Technical Hiring</h2>
      <p class="text-3xl font-bold">18</p>
      <p class="text-muted-foreground">Days to Hire</p>
      <p class="text-3xl font-bold">54</p>
      <p class="text-muted-foreground">Days to Fill</p>
      <p class="text-3xl font-bold">98%</p>
      <p class="text-muted-foreground">Acceptance Rate</p>
      <p class="text-3xl font-bold">4.8%</p>
      <p class="text-muted-foreground">Withdrawal Rate (after CC)</p>
    </div>
    
    <div class="bg-card p-4 rounded-lg shadow-md">
      <h2 class="text-lg font-semibold">Non-technical Hiring</h2>
      <p class="text-3xl font-bold">23</p>
      <p class="text-muted-foreground">Days to Hire</p>
      <p class="text-3xl font-bold">37</p>
      <p class="text-muted-foreground">Days to Fill</p>
      <p class="text-3xl font-bold">100%</p>
      <p class="text-muted-foreground">Acceptance Rate</p>
      <p class="text-3xl font-bold">4%</p>
      <p class="text-muted-foreground">Withdrawal Rate (after CC)</p>
    </div>
    
    <div class="bg-card p-4 rounded-lg shadow-md">
      <h2 class="text-lg font-semibold mb-4">Recruitment Costs</h2>
      <div style="height: 300px;">
          <canvas id="recruitmentCostsChart"></canvas>
      </div>
  </div>

  </div>
  <div class="bg-card p-4 rounded-lg shadow-md mb-6">
    <h2 class="text-lg font-semibold">Current Hiring Pipeline</h2>
    <table class="min-w-full mt-4">
      <thead>
        <tr class="bg-muted text-muted-foreground">
          <th class="p-2">Role</th>
          <th class="p-2">Lead</th>
          <th class="p-2">Applicant</th>
          <th class="p-2">1st int.</th>
          <th class="p-2">2nd int.</th>
          <th class="p-2">Final</th>
          <th class="p-2">Offer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-2 text-center">HR Admin</td>
          <td class="p-2 text-center">3</td>
          <td class="p-2 text-center">0</td>
          <td class="p-2 text-center">2</td>
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">1</td>
        </tr>
        <tr>
          <td class="p-2 text-center">Tour Guide</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">7</td>
          <td class="p-2 text-center">5</td>
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">0</td>
        </tr>
        <tr>
          <td class="p-2 text-center">Tour Counselor</td>
          <td class="p-2 text-center">0</td>
          <td class="p-2 text-center">23</td>
          <td class="p-2 text-center">0</td>
          <td class="p-2 text-center">0</td>
          <td class="p-2 text-center">0</td>
          <td class="p-2 text-center">1</td>
        </tr>
        <tr>
          <td class="p-2 text-center">Tour Manager</td>
          <td class="p-2 text-center">2</td>
          <td class="p-2 text-center">35</td>
          <td class="p-2 text-center">7</td>
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">14</td>
          <td class="p-2 text-center">3</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="bg-card p-4 rounded-lg shadow-md">
    <h2 class="text-lg font-semibold mb-4">Top Hiring Sources</h2>
    <div style="height: 300px;">
        <canvas id="topHiringSourcesChart"></canvas>
    </div>
</div>

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('recruitmentCostsChart').getContext('2d');
    var recruitmentCostsChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            datasets: [{
                data: [
                    {{ $recruitmentCosts['Q1'] }},
                    {{ $recruitmentCosts['Q2'] }},
                    {{ $recruitmentCosts['Q3'] }},
                    {{ $recruitmentCosts['Q4'] }}
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Recruitment Costs by Quarter'
            }
        }
    });
    var ctxBar = document.getElementById('topHiringSourcesChart').getContext('2d');
    var topHiringSourcesChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: [
                @foreach($topHiringSources as $source => $percentage)
                    '{{ $source }}',
                @endforeach
            ],
            datasets: [{
                label: 'Percentage of Hires',
                data: [
                    @foreach($topHiringSources as $source => $percentage)
                        {{ $percentage }},
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        callback: function(value) {
                            return value + '%';
                        }
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Top Hiring Sources'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.parsed.y + '%';
                        }
                    }
                }
            }
        }
    });
});


</script>
@endsection

@endsection
