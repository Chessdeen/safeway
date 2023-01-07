<!DOCTYPE html>
<html>
    <header>
        
        
        
        <title>Modal Test</title>
        
        
        <style>

        </style>
        <link href="assets/dist/css/modal.css" rel="stylesheet">
    </header>
    <body>
        
        
        
       <div class="card">
  <div class="content-wrapper">
    <h2 class="heading">CSS Modal</h2>
    <p>This demo shows how to open a modal without using JavaScript. While it's a cool trick, it's not 100% accessible. JavaScript is needed to set focus on the modal and to create a focus trap.</p>
  </div>
  <a href="#modal" role="button" class="button button__link">Modal Trigger</a>
</div>

<!-- Modal -->
<div class="modal-wrapper" id="modal">
  <div class="modal-body card">
    <div class="modal-header">
      <h2 class="heading">Modal Header</h2>
      <a href="#!" role="button" class="close" aria-label="close this modal">
        <svg viewBox="0 0 24 24">
          <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
        </svg>
      </a>
    </div>
    <p>Simple example using the <code>:target</code> selector to open a modal.</p>
  </div>
  <a href="#!" class="outside-trigger"></a>
</div>
        
    </body>
</html>