@extends('layouts.app')
@section('content')
<div class="container">
    <h1>📊 Service Summary Report</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Top 3 Booked Cars</h5>
                    <ul>
                        <li>Honda Civic – 12 bookings</li>
                        <li>Toyota Corolla – 10 bookings</li>
                        <li>Ford Focus – 8 bookings</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <button onclick="window.print()" class="btn btn-outline-primary mt-3">🖨️ Print Report</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Honda', 'Toyota', 'Ford'],
            datasets: [{
                data: [12, 10, 8],
                backgroundColor: ['#0d6efd', '#198754', '#ffc107']
            }]
        }
    });
</script>
@endsection
