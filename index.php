<?php
$pageTitle = "FreelanceFlow CRM - Manage Clients, Projects & Invoices";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f8f9fa;
        }

        .navbar{
            padding:15px 0;
        }

        .hero{
            padding:100px 0;
            background:linear-gradient(135deg,#0d6efd,#4f46e5);
            color:#fff;
        }

        .hero h1{
            font-size:55px;
            font-weight:700;
        }

        .hero p{
            font-size:18px;
            margin:25px 0;
        }

        .feature-card{
            border:none;
            border-radius:15px;
            transition:.3s;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .feature-card:hover{
            transform:translateY(-8px);
        }

        .section-title{
            font-size:40px;
            font-weight:700;
        }

        .pricing{
            background:#ffffff;
            border-radius:20px;
            padding:40px;
            box-shadow:0 5px 25px rgba(0,0,0,.08);
        }

        .cta{
            background:#0d6efd;
            color:white;
            border-radius:20px;
            padding:60px;
        }

        footer{
            background:#111827;
            color:#fff;
        }

        .btn-custom{
            padding:12px 30px;
            font-weight:600;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3 text-primary" href="#">
            FreelanceFlow CRM
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#features" class="nav-link">Features</a>
                </li>

                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>

            </ul>

            <a href="login.php" class="btn btn-primary ms-lg-3">
                Login
            </a>

        </div>

    </div>
</nav>

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>
Manage Freelance Business Like a Pro
</h1>

<p>
FreelanceFlow CRM helps freelancers manage clients, invoices,
projects, tasks, payments and meetings from one powerful dashboard.
</p>

<a href="register.php" class="btn btn-light btn-lg btn-custom">
Get Started Free
</a>

</div>

<div class="col-lg-6 text-center">

<img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=700"
class="img-fluid rounded shadow">

</div>

</div>

</div>

</section>

<section id="features" class="py-5">

<div class="container">

<h2 class="section-title text-center mb-5">
Amazing Features
</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Client Management</h4>

<p>
Store client information, contacts, history and communication.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Project Tracking</h4>

<p>
Track every project progress, deadlines and milestones.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Invoice System</h4>

<p>
Generate professional invoices and monitor payment status.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Task Manager</h4>

<p>
Organize daily work and never miss important deadlines.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Analytics</h4>

<p>
Visual reports for income, projects and business growth.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card feature-card p-4">

<h4>Team Collaboration</h4>

<p>
Invite team members and manage permissions easily.
</p>

</div>

</div>

</div>

</div>

</section>

<section id="pricing" class="py-5 bg-light">

<div class="container">

<h2 class="section-title text-center mb-5">
Simple Pricing
</h2>

<div class="row justify-content-center">

<div class="col-lg-4">

<div class="pricing text-center">

<h3>Starter</h3>

<h1 class="text-primary">$9</h1>

<p>/month</p>

<hr>

<p>Unlimited Clients</p>

<p>Unlimited Projects</p>

<p>Invoice Generator</p>

<p>Email Notifications</p>

<p>Dashboard Analytics</p>

<a href="#" class="btn btn-primary w-100">
Start Now
</a>

</div>

</div>

<div class="col-lg-4">

<div class="pricing text-center">

<h3>Professional</h3>

<h1 class="text-primary">$29</h1>

<p>/month</p>

<hr>

<p>Unlimited Clients</p>

<p>Unlimited Projects</p>

<p>Invoice Generator</p>

<p>Email Notifications</p>

<p>Dashboard Analytics</p>

<a href="#" class="btn btn-primary w-100">
Start Now
</a>

</div>

</div>

<div class="col-lg-4">

<div class="pricing text-center">

<h3>Business</h3>

<h1 class="text-primary">$79</h1>

<p>/month</p>

<hr>

<p>Unlimited Clients</p>

<p>Unlimited Projects</p>

<p>Invoice Generator</p>

<p>Email Notifications</p>

<p>Dashboard Analytics</p>

<a href="#" class="btn btn-primary w-100">
Start Now
</a>

</div>

</div>

</div>

</div>

</section>

<section class="py-5">

<div class="container">

<div class="cta text-center">

<h2>
Ready to Grow Your Freelance Business?
</h2>

<p class="mt-3">
Join thousands of freelancers managing clients with FreelanceFlow CRM.
</p>

<a href="register.php" class="btn btn-light btn-lg mt-3">
Create Free Account
</a>

</div>

</div>

</section>

<footer id="contact" class="py-4">

<div class="container text-center">

<p class="mb-1">
© <?= date('Y'); ?> FreelanceFlow CRM
</p>

<p class="mb-0">
Built with PHP & Bootstrap
</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>