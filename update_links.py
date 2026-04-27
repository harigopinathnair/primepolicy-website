import os
import glob

# The directory to search
dir_path = r"c:\wamp64\www\primepolicy_com"

# The replacements dictionary
replacements = {
    'href="personal-insurance.html#motor"': 'href="motor-insurance.html"',
    'href="personal-insurance.html#gap"': 'href="gap-insurance.html"',
    'href="personal-insurance.html#protect-plus"': 'href="protect-plus-insurance.html"',
    'href="personal-insurance.html#travel"': 'href="travel-insurance.html"',
    'href="personal-insurance.html#home"': 'href="home-insurance.html"',
    'href="personal-insurance.html#malpractice"': 'href="medical-malpractice.html"',
    'href="personal-insurance.html#liability"': 'href="third-party-liability.html"'
}

html_files = glob.glob(os.path.join(dir_path, "*.html"))

for file_path in html_files:
    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()
    
    original_content = content
    for old, new in replacements.items():
        content = content.replace(old, new)
        
    if content != original_content:
        with open(file_path, 'w', encoding='utf-8') as file:
            file.write(content)
        print(f"Updated {os.path.basename(file_path)}")
print("Done!")
