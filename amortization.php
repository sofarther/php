<?php
 include('function.php');
 $balance=10000.00;
 $interestRate=0.0575;//年利率
 $monthlyInterest=$interestRate/12;
 $termLength=5; //贷款期限，以年计
 $payNum=1;
//调用计算每月还款
$periodPay=calPeriodPay($balance,$interestRate,$termLength);
echo "<table width='50%' align='center' border='1'>";
echo "<tr> 
     <th>Payment Number</th><th>Balance</th>
     <th>Payment</th><th>Interest</th><th>Principal</th>
    </tr>
     ";
  amortizationTable($payNum,$periodPay,$balance,$monthlyInterest);

echo "</table>";
?>
