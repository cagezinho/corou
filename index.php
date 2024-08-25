<?php
    include('conexao.php');
    
    $sql = "SELECT DATE(data) AS data, COUNT(*) AS total FROM corou GROUP BY DATE(data) ORDER BY data ASC";
    $result = mysqli_query($conexao, $sql);
    
    $dates = [];
    $totals = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $dates[] = $row['data'];
        $totals[] = $row['total'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Corou!</title>
</head>
<body>
    <nav class="header">
        <h1 class="header-h1">Quantas vezes a COROU pediu pra mudar de equipe</h1>
    </nav>
    <main>
        <div class="sidebar">
            <div class="sidebar-card">
                <form class="form" action="contador.php" method="post">
                    <input type="hidden" name="timestamp" value="<?php echo time(); ?>">
                    <button type="submit" class="button-confirm">+</button>
                </form>
            </div>    
        </div>

        <section class="content">
            
        </section> 
        <section class="content">
            <canvas id="myChart"></canvas>
        </section> 
    </main>


<script>
    const labels = <?php echo json_encode($dates); ?>;
    const data = <?php echo json_encode($totals); ?>;

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar', // Você pode escolher 'line', 'bar', etc.
        data: {
            labels: labels,
            datasets: [{
                label: 'Vezes que a COROU pediu pra sair',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>