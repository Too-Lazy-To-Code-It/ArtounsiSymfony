const jobTitle = document.querySelector('.job-details h2');
const jobDesc = document.querySelector('.job-details p');

jobTitle.addEventListener('mouseenter', () => {
    jobTitle.style.textDecoration = 'none';
    jobTitle.style.borderBottom = '2px solid #fff';
    jobDesc.style.display = 'block';
});

jobTitle.addEventListener('mouseleave', () => {
    jobTitle.style.borderBottom = 'none';
    jobDesc.style.display = 'none';
});