<?php
// Simple PHP routing for demo purposes
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buuys - Belanja Kebutuhan Sehari-harimu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #34495e;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: var(--primary-color);
        }
        
        .navbar-brand img {
            height: 40px;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ff0b65c9-8dfa-4df8-9cef-f982299db5b9.png');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .product-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        
        .product-img {
            height: 200px;
            object-fit: cover;
        }
        
        .badge-sale {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-color);
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 30px 0;
        }
        
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .feature-box {
            padding: 30px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }
        
        .testimonial-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Buuys.logo.png" alt="E-Shop Logo - Modern e-commerce platform with shopping cart icon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'products') ? 'active' : ''; ?>" href="?page=products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="?page=contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-light me-2"><i class="fas fa-search"></i></a>
                    <a href="#" class="btn btn-outline-light me-2"><i class="fas fa-user"></i></a>
                    <a href="#" class="btn btn-outline-light position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <?php if ($page == 'home'): ?>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1 class="display-4 fw-bold mb-4">Selamat datang di Buuys</h1>
                <p class="lead mb-5">Menarik kebutuhanmu sehari-hari, tersedia disini semua. Selamat berbelanja</p>
                <a href="?page=products" class="btn btn-primary btn-lg px-4 me-2">Shop Now</a>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2>Featured Products</h2>
                    <p class="lead text-muted">Check out our most popular items</p>
                </div>
                <div class="row">
                    <?php
                    // Sample product data - in a real app this would come from a database
                    $products = [
                        ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 9.99, 'image' => 'https://jete.id/wp-content/uploads/2024/04/Headphone-JETE-SA1-2.jpg', 'sale' => true],
                        ['id' => 2, 'name' => 'Smart Watch', 'price' => 29.99, 'image' => 'data:image/jpeg;base64,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 ', 'sale' => false],
                        ['id' => 3, 'name' => 'Bluetooth Speaker', 'price' => 59.99, 'image' => 'data:image/jpeg;base64,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', 'sale' => true],
                        ['id' => 4, 'name' => 'Laptop Backpack', 'price' => 39.99, 'image' => 'data:image/jpeg;base64,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', 'sale' => false],
                    ];
                    
                    foreach ($products as $product) {
                        echo '
                        <div class="col-md-3 mb-4">
                            <div class="card product-card h-100 position-relative">
                                ' . ($product['sale'] ? '<span class="badge badge-sale">SALE</span>' : '') . '
                                <img src="' . $product['image'] . '" class="card-img-top product-img" alt="Product image: ' . $product['name'] . '" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/15472cda-b4ec-44ee-9d20-c567329153c0.png">
                                <div class="card-body">
                                    <h5 class="card-title">' . $product['name'] . '</h5>
                                    <p class="card-text text-muted">Premium quality product</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        ' . ($product['sale'] ? '<span class="text-danger"><del>$' . ($product['price'] + 20) . '</del> $' . $product['price'] . '</span>' : '<span>$' . $product['price'] . '</span>') . '
                                        <button class="btn btn-sm btn-primary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
                <div class="text-center mt-4">
                    <a href="?page=products" class="btn btn-outline-primary">View All Products</a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4>Free Shipping</h4>
                            <p>Free shipping on all orders over $50</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fas fa-undo"></i>
                            </div>
                            <h4>Easy Returns</h4>
                            <p>30-day return policy with no questions asked</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h4>Secure Payment</h4>
                            <p>100% secure payment methods</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2>What Our Customers Say</h2>
                    <p class="lead text-muted">Hear from our satisfied clients</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/03bb918e-3307-4097-97db-5d3163b26a67.png" class="testimonial-img" alt="Portrait of smiling male customer with short brown hair and blue shirt">
                                <div>
                                    <h5>John Smith</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3">"The quality of the products exceeded my expectations. Fast shipping too!"</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/edcdc921-448e-43fa-b6a7-117085fe9a1f.png" class="testimonial-img" alt="Portrait of female customer with curly black hair wearing glasses">
                                <div>
                                    <h5>Maria Garcia</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3">"Excellent customer service and the items arrived perfectly packaged."</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/674d60f9-64cd-4024-ad48-f73c03ec881e.png" class="testimonial-img" alt="Portrait of mature customer with gray hair and friendly expression">
                                <div>
                                    <h5>Robert Johnson</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3">"I'm very pleased with my purchase. Will definitely shop here again."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($page == 'products'): ?>
        <!-- Products Page -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Sidebar Filters -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Filters</h5>
                            </div>
                            <div class="card-body">
                                <h6>Categories</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category1">
                                    <label class="form-check-label" for="category1">Electronics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category2">
                                    <label class="form-check-label" for="category2">Clothing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category3">
                                    <label class="form-check-label" for="category3">Home & Garden</label>
                                </div>
                                <hr>
                                <h6>Price Range</h6>
                                <div class="mb-3">
                                    <input type="range" class="form-range" min="0" max="500" id="priceRange">
                                    <div class="d-flex justify-content-between">
                                        <span>$0</span>
                                        <span>$500</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm w-100">Apply Filters</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2>All Products</h2>
                            <div>
                                <select class="form-select form-select-sm" style="width: auto;">
                                    <option>Sort by: Featured</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Name: A-Z</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            // Extended product catalog
                            $allProducts = [
                                ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 89.99, 'image' => 'data:image/jpeg;base64,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PrqJl3ntTRNGLzvlYN7vaaM8xjcOpyChO8d4XsVaXrZ0eU9U500VoZziSB2JD9dvH6wxxxug84y0b4u0BtRnhmF3Mc1wwxW3aa0LPSPMc0ZYTe18Y5Bxa7I/84i61uq0e0naZdjuHHwyP6xCCNmg3hdTH7nBZUjHj1m35txHeRm3vy5rGfY4oM+lDeKzyxgC1tspacCrI6POjyo0hsz1JMVJc4YiWbZNiG+yy4ILs8MBvAYWh+jWqq6N1ZT7OL3BkL+yZWNsC9jzgDt7QAdYdm91qmkKOWJ5jmjfHK3NsjS1xGQNjn3jA8V65padkbGxxtDWMaGta0Wa1oFgANwAWFp7QNNWR9VUwtkbuvg5pyux4xaeYIQeUqWotgpulqFvWsHQi+5dRVII3R1AII5dawG/K7fFadV6m6TpjaSimcNzoWmZp5+iuQO8BBkMmXTV1myPgAMSScAABmb7lmaK1W0lObR0czcbF0zTC0cz1liR7oKtHUno4jpHNqKhwnqB6th6KE8WA4udu2z4BtzcHRdqe6ljdU1DbVMwtsnOGLAiP3iQC628NH0bnfERAREQEREBERAREQEREBERAREQEREGNpCginYY5o2yMObXC45EcDzGKrPWXomvd1FKP8qYm32ZRc+DgfeVqog8s6e0LV0h/eIJYwPpOBLPCZt238bqEgqXSvDGQCd7vota8yO8YiHO8br2CuLIwMgB3CyCodReisnZnromRZEQMc5z/wD7JC4hvutx+sMlbsMTWNDGNDWtAAAFgAMAABkFzRAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH/9k=', 'category' => 'electronics', 'rating' => 4.5],
                                ['id' => 2, 'name' => 'Smart Watch', 'price' => 199.99, 'image' => 'data:image/jpeg;base64,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', 'category' => 'electronics', 'rating' => 4.2],
                                ['id' => 3, 'name' => 'Bluetooth Speaker', 'price' => 74,99, 'image' => 'data:image/jpeg;base64,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', 'category' => 'electronics', 'rating' => 4.7],
                                ['id' => 4, 'name' => 'Laptop Backpack', 'price' => 29,99, 'image' => 'https://placehold.co/600x400', 'category' => 'accessories', 'rating' => 4.3],
                                ['id' => 5, 'name' => 'Smartphone', 'price' => 999, 'image' => 'https://placehold.co/600x400', 'category' => 'electronics', 'rating' => 4.8],
                                ['id' => 6, 'name' => 'Desk Lamp', 'price' => 25, 'image' => 'https://placehold.co/600x400', 'category' => 'home', 'rating' => 4.1],
                                ['id' => 7, 'name' => 'Wireless Mouse', 'price' => 20, 'image' => 'https://placehold.co/600x400', 'category' => 'electronics', 'rating' => 4.0],
                                ['id' => 8, 'name' => 'T-Shirt', 'price' => 10, 'image' => 'https://placehold.co/600x400', 'category' => 'clothing', 'rating' => 4.4],
                            ];
                            
                            foreach ($allProducts as $product) {
                                echo '
                                <div class="col-md-4 mb-4">
                                    <div class="card product-card h-100">
                                        <img src="' . $product['image'] . '" class="card-img-top product-img" alt="Product image: ' . $product['name'] . '" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f405b8dd-1dec-4130-93e5-1b5638eabcec.png">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $product['name'] . '</h5>
                                            <div class="mb-2">
                                                ' . str_repeat('<i class="fas fa-star text-warning"></i>', floor($product['rating'])) . '
                                                ' . ($product['rating'] - floor($product['rating']) > 0 ? '<i class="fas fa-star-half-alt text-warning"></i>' : '') . '
                                                ' . str_repeat('<i class="far fa-star text-warning"></i>', 5 - ceil($product['rating'])) . '
                                                <span class="text-muted ms-2">(' . $product['rating'] . ')</span>
                                            </div>
                                            <p class="card-text text-muted mb-2">' . ucfirst($product['category']) . '</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>$' . $product['price'] . '</span>
                                                <button class="btn btn-sm btn-primary">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($page == 'contact'): ?>
        <!-- Contact Page -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-5">
                            <h2>Contact Us</h2>
                            <p class="text-muted">Have questions? We'd love to hear from you!</p>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject">
                                        <option>General Inquiry</option>
                                        <option>Product Questions</option>
                                        <option>Order Support</option>
                                        <option>Returns</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-md-0 mt-4">
                            <h3>Our Office</h3>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Jalan Ketapang Nomor 303, Ruko sebelah tukang seblak, Cilodong, Depok, jawa Barat, Kode pos 16414</p>
                                    <p class="mb-1"><i class="fas fa-phone me-2 text-primary"></i> (123) 456-7890</p>
                                    <p class="mb-1"><i class="fas fa-envelope me-2 text-primary"></i> buuyscsupport@gmail.com</p>
                                </div>
                            </div>
                        
                            <h4>Opening Hours</h4>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-1">Monday - Friday: 9:00 AM - 6:00 PM</li>
                                        <li class="mb-1">Saturday: 10:00 AM - 4:00 PM</li>
                                        <li class="mb-1">Sunday: Closed</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="map-wrapper mb-4">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b63bfaad-9283-4bea-a26d-2983bc5034dc.png" class="img-fluid rounded" alt="Map location showing our store at 123 Business Avenue in City Center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
        
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>About E-Shop</h5>
                    <p>The best online store for all your needs. Quality products at affordable prices with excellent customer service.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="?page=home" class="text-white-50">Home</a></li>
                        <li class="mb-2"><a href="?page=products" class="text-white-50">Products</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50">Contact Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Shipping Information</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Returns & Exchange</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Newsletter</h5>
                    <p>Subscribe to get special offers, free giveaways, and news!</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 mb-3 bg-light">
            <div class="text-center">
                <p class="mb-0">© 2025 buuys. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple JavaScript for demo purposes
        document.addEventListener('DOMContentLoaded', function() {
            // Cart count update
            const cartButtons = document.querySelectorAll('.btn-add-to-cart');
            cartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    alert('Product added to cart!');
                });
            });
            
            // Search toggle
            document.querySelector('.btn-search').addEventListener('click', function() {
                alert('Search function coming soon!');
            });
        });
    </script>
</body>
</html>