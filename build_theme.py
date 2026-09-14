"""Build a WordPress theme ZIP with Python 3; no dependencies."""
from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED

root = Path(__file__).resolve().parent
source = root / "kodoaso-photo-child"
required = ["style.css", "theme.json", "functions.php", "templates/kodoaso-photo.html", "assets/photo.css", "assets/photo.js"]
for name in required:
    if not (source / name).is_file():
        raise SystemExit(f"Missing theme file: {name}")
target = root / "dist" / "kodoaso-photo-child.zip"
target.parent.mkdir(exist_ok=True)
with ZipFile(target, "w", ZIP_DEFLATED) as archive:
    for name in required:
        archive.write(source / name, f"kodoaso-photo-child/{name}")
with ZipFile(target) as archive:
    if archive.testzip() is not None:
        raise SystemExit("ZIP validation failed")
print(target)
