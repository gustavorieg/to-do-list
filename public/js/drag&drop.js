const columns = document.querySelectorAll(".tasks");

document.addEventListener("dragstart", (e) => {
  if (e.target.classList.contains("task")) {
    e.dataTransfer.setData("text/plain", e.target.id);
    e.target.classList.add("dragging");
  }
});

document.addEventListener("dragend", (e) => {
  e.target.classList.remove("dragging");
});

columns.forEach((column) => {
  column.addEventListener("dragover", (e) => {
    e.preventDefault();
    const dragging = document.querySelector(".dragging");
    if (dragging) {
      const target = e.target;
      if (target.classList.contains("task")) {
        const boundingBox = target.getBoundingClientRect();
        const mouseY = e.clientY;
        const isAfter = mouseY > boundingBox.top + boundingBox.height / 2;
        if (isAfter) {
          target.parentElement.insertBefore(dragging, target.nextElementSibling);
        } else {
          target.parentElement.insertBefore(dragging, target);
        }
      }
    }
  });

  column.addEventListener("dragenter", (e) => {
    e.preventDefault();
    const target = e.target;
    if (target.classList.contains("task") && !target.classList.contains("dragging")) {
      target.classList.add("drag-over");
    }
  });

  column.addEventListener("dragleave", (e) => {
    const target = e.target;
    if (target.classList.contains("task") && target.classList.contains("drag-over")) {
      target.classList.remove("drag-over");
    }
  });
});

document.addEventListener("dragover", (e) => {
  e.preventDefault();
  const dragging = document.querySelector(".dragging");
  if (dragging) {
    const target = e.target;
    if (target.classList.contains("tasks")) {
      target.appendChild(dragging);
    }
  }
});

document.addEventListener("drop", (e) => {
  e.preventDefault();
});
