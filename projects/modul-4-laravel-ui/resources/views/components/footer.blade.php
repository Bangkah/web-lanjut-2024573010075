<footer class="mt-5 py-4 border-top {{ $theme === 'dark' ? 'border-secondary' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Laravel UI Integrated Demo</h5>
                <p class="mb-0">Demonstrasi Partial Views, Blade Components, dan Theme Switching</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">
                    <strong>Current Theme:</strong> 
                    <span class="badge {{ $theme === 'dark' ? 'bg-primary' : 'bg-dark' }}">
                        {{ ucfirst($theme) }}
                    </span>
                </p>
                <p class="mb-0">&copy; 2024 Laravel UI Demo. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
