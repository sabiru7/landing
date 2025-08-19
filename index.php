<?php
// Simple PHP routing for demo purposes
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop - Your Online Store</title>
    
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
                <img src="assets/Buuys.logo.png" alt="E-Shop Logo - Modern e-commerce platform with shopping cart icon">
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
                <h1 class="display-4 fw-bold mb-4">Welcome to E-Shop</h1>
                <p class="lead mb-5">Discover amazing products at unbeatable prices</p>
                <a href="?page=products" class="btn btn-primary btn-lg px-4 me-2">Shop Now</a>
                <a href="#" class="btn btn-outline-light btn-lg px-4">Learn More</a>
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
                        ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 89.99, 'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b14bdbc6-dff5-4a7f-8828-db16ef00d801.png', 'sale' => true],
                        ['id' => 2, 'name' => 'Smart Watch', 'price' => 199.99, 'image' => 'https://placehold.co/600x400', 'sale' => false],
                        ['id' => 3, 'name' => 'Bluetooth Speaker', 'price' => 59.99, 'image' => 'https://placehold.co/600x400', 'sale' => true],
                        ['id' => 4, 'name' => 'Laptop Backpack', 'price' => 39.99, 'image' => 'https://placehold.co/600x400', 'sale' => false],
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
                                ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 89.99, 'image' => 'https://placehold.co/600x400', 'category' => 'electronics', 'rating' => 4.5],
                                ['id' => 2, 'name' => 'Smart Watch', 'price' => 199.99, 'image' => 'https://placehold.co/600x400', 'category' => 'electronics', 'rating' => 4.2],
                                ['id' => 3, 'name' => 'Bluetooth Speaker', 'price' => 74,99, 'image' => 'https://placehold.co/600x400', 'category' => 'electronics', 'rating' => 4.7],
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
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2 text-primary"></i> 123 Business Ave, City Center, PC 12345</p>
                                    <p class="mb-1"><i class="fas fa-phone me-2 text-primary"></i> (123) 456-7890</p>
                                    <p class="mb-1"><i class="fas fa-envelope me-2 text-primary"></i> info@eshop.com</p>
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
                <p class="mb-0">© 2023 E-Shop. All rights reserved.</p>
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

