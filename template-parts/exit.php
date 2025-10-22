<?php
/**
 * Template part for displaying Exit Pop Up
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package allmyhr-mmxxv
 */

?>
<style>
    .modal-exit {
    position: fixed;
    inset: 0;
    z-index: 999;
    width: 100vw;
    height: 100dvh;
    background: rgba(5, 5, 5, .8);
    display: flex;
    justify-content: center;
    align-items: flex-start;
    overflow: auto;
    padding: 60px 20px 20px;
    }
    .close-btn {
    position: fixed;
    top: 12px;
    right: 12px;
    background: transparent;
    color: #fff;
    cursor: pointer;
    }
.modal-content {
    position: relative;
    max-width: 900px;
    width: 100%;
    background: #171717;
    border: 1px solid #202123;
    border-radius: 6px;
    padding: 40px!important;
    margin: auto;
    transform: translateY(-20px);
    transition: opacity 0.3s ease, transform 0.3s ease;
        color: #fff;
    text-align: left;
        border-style: solid;
    border-color: #0879f8;
    text-decoration: none;
    text-align: center;
}
.modal-content:hover {
    color: #fff;
}
.modal-image {
        background-color: #E76A15;
    background-image: url('https://allmyhr.com/wp-content/uploads/2025/08/allmyhr-badge_fullaccess.webp');
    width: 100%;
    height: 200px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

    </style>
<div class="modal-exit" style="display: none;">
<div class="fa close-btn"></div>
<div class=" modal-content">
  <h1>Limited Time Offer</h1>
    <div class="modal-image"></div>
          <h2>Is HR working for you—or against you?</h2>
          Start your subscription today. Cancel anytime.<br>
          <div id="w-node-_393bb891-1442-0b52-7baa-f3661dd7c51e-5e7a721a" class="w-layout-layout _900-width wf-layout-layout">
        <div class="w-layout-cell">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4><strong>Stay Compliant, Avoid Risk</strong></h4>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4><strong>Access to Certified HR Experts</strong></h4>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4><strong>Compliant, Living Handbook</strong></h4>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="w-layout-hflex phrases">
            <div class="fa highlight blu txt"></div>
            <h4><strong>Strong Employee Benefits &amp; Training</strong></h4>
          </div>
        </div>
      </div>
          <strong class="highlight txt">14-day Full Access for only $1.</strong> 
          <a href="https://allmyhr.com/?add-to-cart=30702" class="btn">Get Started</a>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.querySelector(".modal-exit");
  const closeButtons = document.querySelectorAll(".close-btn, .modal-exit");
  let popupShown = false;

  // Hide modal by default
  if (modal) {
    modal.style.display = "none";
  }

  // Check if dismissed already
  if (localStorage.getItem("exitPopupDismissed") === "true") {
    return; // don’t even bind events
  }

  function showModal() {
    if (popupShown || !modal) return;
    popupShown = true;
    modal.style.display = "flex";
  }

  // Detect mouse near top only
  document.addEventListener("mousemove", function (e) {
    const threshold = 100; // px from top
    if (e.clientY < threshold) {
      showModal();
    }
  });

  // Close on click
  closeButtons.forEach((btn) => {
    btn.addEventListener("click", function (e) {
      if (e.target.closest(".modal-content")) return; // don't close if clicking inside modal
      modal.style.display = "none";
      localStorage.setItem("exitPopupDismissed", "true");
    });
  });
});
</script>

