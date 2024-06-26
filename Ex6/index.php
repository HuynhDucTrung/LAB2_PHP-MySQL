<?php
function calculateSumAndAverage($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    
    $average = $sum / 3;
    
    return [
        'sum' => $sum,
        'average' => $average
    ];
}
$num1 = 10;
$num2 = 20;
$num3 = 30;

$result = calculateSumAndAverage($num1, $num2, $num3);

echo "Tổng: " . $result['sum'] . "\n";
echo "Trung bình: " . $result['average'] . "\n";
?>
