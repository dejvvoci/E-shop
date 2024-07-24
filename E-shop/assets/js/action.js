document.querySelectorAll('.product').forEach(product => {
    const stars = product.querySelectorAll('.star i');

    stars.forEach((star, index) => {
        star.addEventListener('mouseover', () => {
            stars.forEach((s, i) => {
                s.classList.toggle('active', i <= index);
            });
        });

        star.addEventListener('mouseout', () => {
            stars.forEach(s => s.classList.remove('active'));
        });
    });
});