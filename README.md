# 📦 LinkMorpher

**LinkMorpher** is a lightweight PHP-based web application that transforms long URLs into abbreviated, shareable versions—either randomly generated or derived from the original link structure.

---

## 🚀 Features

- Accepts any valid URL input
- Generates two types of abbreviated links:
  - **RandomAbbreviated Link**: A 7-character random string
  - **SubAbbreviated Link**: A substring derived from the original link
- Preserves the original domain extension
- Displays clickable output links
- Simple, clean UI

---

## 🧠 How It Works

1. **User Input**: The user enters a URL into the form.
2. **Form Submission**: On clicking "Abbreviate Link", the form sends a POST request.
3. **Processing**:
   - The original link is parsed to extract its extension.
   - `linkMaker()` generates a random 7-character string.
   - `subLink()` extracts a substring from the original link.
4. **Output**:
   - Two new URLs are constructed using the abbreviations and original extension.
   - The original and abbreviated links are displayed as clickable anchors.

---

## 📂 File Structure


---

## 📌 Example

**Input**:  
`https://example.com/page.html`

**Output**:
- Original Link: `https://example.com/page.html`
- RandAbbreviated Link: `https://aB3xYz1.html/`
- SubAbbreviated Link: `https://ple.html/`

---

## 🛠️ Class Reference: `LinkAbbreviation`

### `linkMaker()`

Generates a random 7-character string using alphanumeric characters.

```php
public static function linkMaker()
    subLink($abbreviatedlink)
```

Extracts a 3-character substring starting from the 10th character of the input string.
public static function subLink($abbreviatedlink)

🎨 UI Notes
The form and output are styled with basic CSS for clarity.

Inline styles use fixed margin-left values, which may not be responsive. Consider using Flexbox or Grid for better layout control.

🌱 Future Improvements
Add database support to store and retrieve original/abbreviated links

Implement actual redirection logic for abbreviated links

Improve substring logic to ensure meaningful abbreviations

Enhance UI responsiveness for mobile devices

📄 License
This project is open-source and free to use under the MIT License.
Let me know if you'd like help formatting this for GitHub, adding badges, or turning it into a full landing page!
