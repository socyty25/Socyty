# 🛡️ Socyty: A Gamified Cybersecurity Awareness Platform

<img width="1536" height="1024" alt="image" src="https://github.com/user-attachments/assets/c8ff2c24-b983-4a10-af34-9292106e8351" />


## 📘 Overview

Say goodbye to tedious cybersecurity awareness training! **Socyty** is a free, interactive, and gamified platform that redefines how employees and individuals learn cybersecurity awareness. It transforms a traditionally dry subject into an engaging, practical, and measurable experience, building the first and most crucial line of defense: people.

With cyber threats increasing globally, both individuals and organizations face a growing need for better cybersecurity awareness. Research shows that human error remains one of the leading causes of data breaches, making employees the most critical line of defense. Unfortunately, many existing cybersecurity training programs are monotonous and forgettable, relying on passive learning methods that fail to keep users engaged or motivated.

---

## ✨ Why Choose Socyty?

- **Knowledge That Sticks:** Socyty leverages gamification and interactivity to ensure knowledge is not only learned but retained and applied effectively.  
- **Realistic Simulations:** Users experience realistic and interactive cyber threat scenarios instead of just reading about them — fostering critical thinking and situational awareness.  
- **Measurable Progress:** The built-in Pre-Test and Post-Test features provide clear metrics to evaluate user learning progression and platform effectiveness.  
- **Accessibility & Flexibility:** Developed with a security-first and mobile-friendly mindset, allowing users to learn anytime, anywhere, and at their own pace.

---

## ⚙️ Main Features

### 🎮 Games
- **Diverse Game Modes:** Trivia, True or False, and Best Scenario.  
- **Power-Ups:** Boost engagement and motivation during gameplay.  
- **Instant Feedback:** Each question provides a correct answer and explanation to reinforce understanding.

### 🧠 Simulations
- **Interactive Scenarios:** Focused on Email Phishing, SMS Phishing, and Password Security.  
- **Real-World Learning:** Users analyze realistic situations and decide whether messages are legitimate or malicious.  
- **Immediate Feedback:** Users receive explanations after every decision, helping them learn through experience.

### 📊 Assessments
- **Pre-Test & Post-Test:** Measure cybersecurity knowledge before and after training to assess progress.

### 📚 Resources
- Access curated educational materials and references for users who wish to expand their cybersecurity knowledge.

### ✍️ Question Submission
- Users can contribute their own cybersecurity-related questions, reinforcing what they’ve learned while enriching platform content.

### 🔍 Admin Question Verification
- Provides an admin interface for verifying user-submitted questions before they are published to ensure quality and accuracy.

---

## ⚙️ Tech Stack

- **Frontend:** HTML, Tailwind CSS, JavaScript  
- **Backend:** PHP (Laravel Framework)  
- **Database:** MySQL

---

## 🌐 Live Demo

🔗 [https://socyty.my.id](https://socyty.my.id)

---

## 🚀 Local Development Setup

### ✅ Minimum Recommended Specifications
| Component | Requirement |
|----------|-------------|
| Operating System | **Windows 10** / **macOS** / **Ubuntu 22.04+** |
| CPU | **2 Cores** |
| RAM | **4 GB** |
| Storage | **8 GB** free space |

---

### 📦 Required Software
Make sure the following are installed **before setup**:

| Requirement | Description |
|------------|-------------|
| **Docker** | Required to run the application environment |
| **Docker Compose v2** | Used to orchestrate containers |
| **Git** | Used to clone the repository |
| **Ports** | `80` (Web) · `9999` (Traefik Dashboard) · `3306` (MySQL) |

> **Note:**  
> These ports can be changed if they conflict with other applications.

---

### 🛠 Deployment Steps

#### 1️⃣ Clone the Repository
```bash
git clone https://github.com/socyty25/Socyty.git
cd Socyty
```
#### 2️⃣ Run the Setup Script
- **Windows:**
```bash
./setup.bat
```

- **macOS / Linux / WSL:**
```bash
chmod +x setup.sh
./setup.sh
```

### This script will automatically:
- Build Docker containers
- Start all services
- Copying .env.example -> .env
- Install Composer dependencies
- Install Blade Icons
- Generate App Key
- Run migrations + seeders
- Clear cache

---

## 👥 Authors

- **Rehan Mawardi**  
- **Justin Dharmadi**  
- **Benny Ebenezer Hutabarat**
