const questions34 = [
  {
    question: "Hitunglah nilai dari $$\\log_{5}{1}$$",
    answer: [
      { Text: "0", correct: true },
      { Text: "3", correct: false },
      { Text: "4", correct: false },
      { Text: "1", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Diketahui $$5^{0} = 1$$
      sehingga, 
      $$\\log_{5}{1} = 0$$
      Jadi, hasilnya adalah 0
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Tentukan nilai dari x, jika $$\\log_{3}{x}=2$$",
    answer: [
      { Text: "6", correct: false },
      { Text: "3", correct: false },
      { Text: "9", correct: true },
      { Text: "4", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita menggunakan sifat basis logaritma, yang menyatakan bahwa jika
      $$\\log_{b}{x}=y$$ maka $$b^{y}=x$$
      <strong>Langkah 2:</strong> Dalam soal ini, 
      $$\\log_{3}{x}=2$$ maka, $$3^{2}=x$$
      Jadi, hasilnya adalah $$9$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Berapakah nilai x, jika $$\\log_{2}\\left({x^{2}}\\right)=3$$",
    answer: [
      { Text: "$$4\\sqrt{2}$$", correct: false },
      { Text: "$$2\\sqrt{8}$$", correct: false },
      { Text: "$$2\\sqrt{4}$$", correct: false },
      { Text: "$$2\\sqrt{2}$$", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita menggunakan sifat pangkat logaritma yang menyatakan bahwa
      $$\\log_{a}\\left({b^{c}}\\right) = c\\cdot \\log_{a}{b}$$
      <strong>Langkah 2:</strong> Di persoalan ini
      $$\\log_{2}\\left({x^{2}}\\right)=3$$
      Maka dapat menulisnya ulang menjadi
      $$2^{3}=x^{2}$$
      $$8 = x^{2}$$
      <strong>Langkah 3:</strong> Untuk mencari nilai dari x, kita perlu mengambil akar kuadrat dari kedua sisi:
      $$x = \\sqrt{8}$$
      $$x = 2\\sqrt{2}$$
      Jadi, hsilnya adalah $$2\\sqrt{2}$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Seorang arsitek menghitung jumlah batu bata yang dibutuhkan untuk membangun dua tembok berbeda. Dia menemukan bahwa jumlah batu bata yang dibutuhkan untuk tembok pertama adalah $$\\log_{2}\\left({n + 3}\\right)$$ dan untuk tembok kedua adalah $$\\log_{2}\\left({n + 5}\\right)$$ di mana n adalah jumlah batu bata awal yang dibutuhkan untuk membangun tembok pertama. Tentukanlah jumlah total batu bata yang dibutuhkan untuk membangun kedua tembok tersebut jika $$n = 8$$", 
    answer: [
      { Text: "$$\\log_{2}\\left({144}\\right)$$", correct: false },
      { Text: "$$\\log_{2}\\left({150}\\right)$$", correct: false },
      { Text: "$$\\log_{2}\\left({143}\\right)$$", correct: true },
      { Text: "$$\\log_{2}\\left({140}\\right)$$", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita dapat menuliskan jumlah total batu bata sebagai berikut:
      $$\\log_{2}\\left({n+3}\\right)+\\log_{2}\\left({n+5}\\right)$$
      <strong>Langkah 2:</strong> Dengan menggunakan sifat distributif logaritma, kita bisa menuliskan ekspresi ini sebagai berikut:
      $$\\log_{2}\\left({\\left(n+3\\right)}\\times \\left(n+5\\right)\\right)$$
      $$\\log_{2}{\\left(\\left(n^{2}+ 8n = 15\\right)\\right)}$$
      <strong>Langkah 3:</strong> Kemudian kita bisa menghitung nilai dari ekspresi ini dengan menggantikan nilai n dengan 8:
      $$\\log_{2}\\left(\\left({8^{2}+8\\times8 + 15}\\right)\\right)$$
      $$\\log_{2}\\left({64 + 64 + 15}\\right)$$
      $$\\log_{2}\\left({143}\\right)$$
      Jadi, hasilnya adalah $$\\log_{2}\\left({143}\\right)$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Seorang ilmuwan sedang mempelajari tingkat penurunan suatu zat radioaktif. Dia menemukan bahwa tingkat penurunan zat radioaktif ini dapat dijelaskan dengan model logaritmik. Jika tingkat penurunan zat radioaktif pada awalnya adalah 200 satuan per jam, dan setelah 10 am tingkat penurunan menjadi 50 satuan per jam, tentukan nilai k dalam persamaan $$\\log_{10}\\left({200}\\right)-\\log_{10}\\left({200-k}\\right)=1$$",
    answer: [
      { Text: "180", correct: false },
      { Text: "190", correct: true },
      { Text: "150", correct: false },
      { Text: "170", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Diberikan bahwa pada awalnya tingkat penurunan zat radioaktif adalah 200 atuan per jam, dan setelah 10 jam tingkat penurunan menjadi 50 satuan per jam.
      Kita bisa menulis persamaan ini dalam bentuk logaritma sebagai berikut:
      $$\\log_{10}\\left({200}\\right)-\\log_{10}\\left({200-k}\\right)= 1$$
      $$2-\\log_{10}\\left({200-k}\\right)=1$$
      $$\\log_{10}\\left({200-k}\\right)=2-1$$
      $$\log_{10}\left({200-k}\right)=1$$
      <strong>Langkah 2:</strong> Karena kita mencari nilai k, kita bisa menuliskan ekspresi ini dalam bentuk invers logaritma:
      $$10^{1} = 200-k$$
      $$10 = 200-k$$
      $$k = 200-10$$
      $$k = 190$$
      Jadi, hasilnya adalah $$190$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
];

const questionNumber34 = document.getElementById("question-numb3-4");
const questionElement34 = document.getElementById("question3-4");
const answerButton34 = document.getElementById("answer3-4");
const explainDiv34 = document.getElementById("explain-div3-4");
const explainElement34 = document.getElementById("explain3-4");
const nextButton34 = document.getElementById("next-button3-4");

let currentQuestionQuizz34 = 0;
let explainQuizz34 = 0;
let score34 = 0;

function startQuiz34() {
  currentQuestionQuizz34 = 0;
  score34 = 0;
  showQuestion34();
}

function showQuestion34() {
  resetState34();
  let currentQuestionn34 = questions34[currentQuestionQuizz34];
  let questionNo = currentQuestionQuizz34 + 1;
  questionElement34.innerHTML = questionNo + ". " + currentQuestionn34.question;
  questionNumber34.innerHTML = `${questionNo}/${questions34.length}`;
  explainElement34.innerHTML = currentQuestionn34.explain;

  currentQuestionn34.answer.forEach((answer) => {
    const button34 = document.createElement("button");
    button34.innerHTML = answer.Text;
    button34.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton34.appendChild(button34);
    if (answer.correct) {
      button34.dataset.correct = answer.correct;
    }
    button34.addEventListener("click", selectAnswer34);
  });
  renderMathInElement(questionElement34);
  renderMathInElement(explainElement34);
  renderMathInElement(answerButton34);
}

function resetState34() {
  explainDiv34.style.display = "none";
  nextButton34.style.display = "none";
  while (answerButton34.firstChild) {
    answerButton34.removeChild(answerButton34.firstChild);
  }
}

function selectAnswer34(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score34++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton34.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton34.style.display = "block";
  explainDiv34.style.display = "block";
}

function showscore34() {
  resetState34();
  questionElement34.innerHTML = `Skor mu ${score34} dari ${questions34.length}!`;
  nextButton34.innerHTML = "Ulangi Quiz";
  nextButton34.style.display = "block";
  questionNumber34.style.display = "none";
}

function handlenextButton34() {
  currentQuestionQuizz34++;
  if (currentQuestionQuizz34 < questions34.length) {
    showQuestion34();
  } else {
    showscore34();
  }
}

nextButton34.addEventListener("click", () => {
  if (currentQuestionQuizz34 < questions34.length) {
    handlenextButton34();
  } else {
    startQuiz34();
  }
});

startQuiz34();
