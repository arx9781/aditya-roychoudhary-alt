function updateProgressBar() {
  const { scrollTop, scrollHeight } = document.documentElement;
  const scrollPercent = `${
    (scrollTop / (scrollHeight - window.innerHeight)) * 100
  }%`;
  const progressBar = document.querySelector(".progress-bar");
  progressBar.style.setProperty("--progress", scrollPercent);
  progressBar.style.setProperty("width", scrollPercent + "%", {
    transition: "width 2s ease",
  });
}

document.addEventListener("scroll", updateProgressBar);
