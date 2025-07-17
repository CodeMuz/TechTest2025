
Your solution was so useful that it's been purchased by the company **'Scratchcards R U'**, for a large fee, they would like to hire you as a contractor to continue expanding the functionality. Before you accept this offer, they have some ideas of work they would like and need to know roughly how one might implement them and how long it will take. Please provide answers to the following:

---

### 1. They would like to create an interface which users, over the internet, can interact with to input scratchcards and verify their scores.

**What technology would you use for the interface? How would it communicate with your code from part 1?**

---

### 2. Users would need a way to register and log into the application.

**How would you architect a solution and facilitate this functionality?**

---

### 3. 'Scratchcards R U' would like a way to generate new scratchcards for each unique user, such that a unique user is shown cards with a minimum score (S) at a custom probability rate P per user. Any card below score S for a user will have score 0 (no matches). For example:

```
User 1 generates Scratchards with Score >= 8 at a rate of P = 0.25 (1 in 4), where S = 8  
User 2 generates Scratchards with Score >= 16 at a rate of P = 0.20 (1 in 5), where S = 16
```

**i)** The scratchcards should be as random as possible, if duplicate numbers are shown to a user it's not an issue

**Using the interface in part 1 and the Authentication in part 2, how would you generate scratchards for each user?**

---

### 4. The rate X from part 3 will change at midnight (per user) for scratchards of the next day. The change will be set to a random probability between 0 and 0.5.

**How would you implement this change so that is happens automatically and not manually?**

---

### 5. 'Scratchcards R U' now needs to offer this functionality as an Api for B2B, they say they want to maximise security, availability, maintainability and scalability.

**How would you go about planning and implementing this? In real-world terms, try to estimate how long this may take and what resources would be needed.**

---

### 6. 'Scratchcards R U' is also interested in showing an AI chat box on the homepage of their website. The Chat box would need a way to verify a scratchcard and also help users if they have questions about the Terms and Conditions of the cards.

**How would you design this?**  
**How could we allow other AI agents to communicate with the scratchcard functionality?**

### 7. When 1000 scratchcards are generated in a day, the company wants to stop generating new ones for that day, this should 'push' an update to users who are viewing the interface. This also needs to publish an event which internal and external services can listen to and know when the daily limit has been reached.

**How would you design this?**