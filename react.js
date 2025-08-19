import React from 'react';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';

// Components
const Navbar = () => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark sticky-top">
      {/* Navbar content */}
    </nav>
  );
};

const HeroSection = () => {
  return (
    <section className="hero-section">
      {/* Hero section content */}
    </section>
  );
};

const FeaturedProducts = () => {
  // Sample product data
  const products = [
    {
      id: 1,
      name: 'Wireless Headphones',
      price: 89.99,
      image: 'https://jete.id/wp-content/uploads/2024/04/Headphone-JETE-SA1-2.jpg',
      sale: true,
    },
    // Add more product data
  ];

  return (
    <section className="py-5">
      {/* Featured products content */}
    </section>
  );
};

const Features = () => {
  return (
    <section className="py-5 bg-light">
      {/* Features section content */}
    </section>
  );
};

const Testimonials = () => {
  return (
    <section className="py-5">
      {/* Testimonials section content */}
    </section>
  );
};

const Footer = () => {
  return (
    <footer className="footer">
      {/* Footer content */}
    </footer>
  );
};

const Home = () => {
  return (
    <div>
      <Navbar />
      <HeroSection />
      <FeaturedProducts />
      <Features />
      <Testimonials />
      <Footer />
    </div>
  );
};

const Products = () => {
  // Product listing logic
  return (
    <div>
      {/* Products page content */}
    </div>
  );
};

const Contact = () => {
  return (
    <div>
      {/* Contact page content */}
    </div>
  );
};

const App = () => {
  return (
    <Router>
      <Route path="/" exact component={Home} />
      <Route path="/products" component={Products} />
      <Route path="/contact" component={Contact} />
    </Router>
  );
};

export default App;
