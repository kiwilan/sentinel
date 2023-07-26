/**
 * Sidebar store
 */
const Sidebar = {
  isOpen: false,
  isOpenOverlay: false,
  isOpenSidebar: false,

  toggle() {
    if (this.isOpen)
      this.close()

    else
      this.open()
  },
  open() {
    this.isOpen = true
    setTimeout(() => {
      this.isOpenOverlay = true
      this.isOpenSidebar = true
    }, 150)
  },
  close() {
    this.isOpenOverlay = false
    this.isOpenSidebar = false
    setTimeout(() => {
      this.isOpen = false
    }, 150)
  },
}

export {
  Sidebar,
}
