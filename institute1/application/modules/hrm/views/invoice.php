<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url() ?>">
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="assets/css/invoice.css"/>
</head>
<body>
<header class="clearfix">
    <div id="logo">
        <img src="<?php echo $setting->logo ?>">
    </div>
    <h1>INVOICE <?php echo $empDetail->id ?></h1>
    <div id="company" class="clearfix">
        <div><?php echo $setting->institute_name ?></div>
        <div><?php echo $setting->address ?><br/> Punjab, Pakistan</div>
        <div><?php echo $setting->phone ?></div>
        <div><a href="mailto:company@example.com"><?php echo $setting->email ?></a></div>
    </div>
    <div id="project">
        <div><span>PROJECT</span> Salary</div>
        <div><span>CLIENT</span> <?php echo $empDetail->name ?></div>
        <div><span>ADDRESS</span> <?php echo $empDetail->address ?></div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com"><?php echo $empDetail->email ?></a></div>
        <div><span>DATE</span> <?php echo date('Y-m-d') ?></div>
        <div><span>DUE DATE</span> <?php echo date('Y-m-d') ?></div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th style="text-align: right">TOTAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="service">Basic Salary</td>
            <td class="desc">Employee Basic Salary of Month</td>
            <td class="total"><?php echo number_format($empDetail->basic) ?></td>
        </tr>
        <tr>
            <td class="service">Deduction</td>
            <td class="desc">Deduction in Basic Salary</td>
            <td class="total"><?php echo number_format($empDetail->deduction) ?></td>
        </tr>
        <tr>
            <td class="service">Gross Salary</td>
            <td class="desc">After Deduction Amount</td>
            <td class="total"><?php echo number_format($empDetail->gross) ?></td>
        </tr>
        <tr>
            <td class="service">Tax</td>
            <td class="desc">Tax Added to Gross Salary</td>
            <td class="total"><?php echo number_format($empDetail->tax) ?></td>
        </tr>
        <tr>
            <td colspan="2">Net Salary</td>
            <td class="total"><?php echo number_format($empDetail->net_salary) ?></td>
        </tr>
        <tr>
            <td colspan="2" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo number_format($empDetail->net_salary) ?></td>
        </tr>
        </tbody>
    </table>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>
<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>
</body>
</html>
