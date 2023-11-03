/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

const sdgs = document.getElementsByClassName("sdg-card");

// NOTE: is a little bit biased towards higher numbers
const shuffled = Array.from(sdgs).sort(() => Math.random() - .25);

// Pick 3, and display them
for(let i = 0; i < 3; i++) {
    const sdg = shuffled[i];
    const modal = document.getElementById(`modal-${sdg.id}`);

    sdg.style.display = "flex";

    sdg.onclick = function() {
        modal.style.display = "flex"; // show modal

        for(let x = 0; x < sdgs.length; x++) {
            sdgs[x].style.display = "none" // hide every sdg
        }
    }
}