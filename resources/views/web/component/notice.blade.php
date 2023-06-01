<style>
    .marquee-container {
        overflow: hidden;
        height: 100px;
        /* Adjust the height as needed */
    }

    .marquee-content {
        display: flex;
        flex-direction: column;
        animation: marquee 20s linear infinite;
    }

    .marquee-item {
        margin-bottom: 10px;
        /* Adjust the spacing between items */
    }

    @keyframes marquee {
        0% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(-100%);
        }
    }
</style>
<div class="container">
    <div class="marquee-container">
        <div class="marquee-content">
            <div class="marquee-item">
                <p>Item 1</p>
            </div>
            <div class="marquee-item">
                <p>Item 2</p>
            </div>
            <div class="marquee-item">
                <p>Item 3</p>
            </div>
            <div class="marquee-item">
                <p>Item 4</p>
            </div>
            <div class="marquee-item">
                <p>Item 5</p>
            </div>
            <div class="marquee-item">
                <p>Item 6</p>
            </div>
            <div class="marquee-item">
                <p>Item 7</p>
            </div>
            <div class="marquee-item">
                <p>Item 8</p>
            </div>
        </div>
    </div>
</div>
